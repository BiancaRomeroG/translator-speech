<?php

namespace App\Http\Livewire\Notification;

use App\Models\Notification_suscription;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;


class NotificationIndex extends Component
{
    public $notifications;
    protected $listeners = ['is_your_plan_expired', 'renderNotification' => 'render', 'yes_deleteAll', 'yes_deleteSelected', 'has_subscription'];


    public function mount()
    {
        $this->notifications = Notification_suscription::where('user_id', auth()->user()->id)->get();
    }

    public function createNotification()
    {
    }

    public function is_your_plan_expired()
    {
        $hoy = Carbon::now()->toDateString();
        //$hoy = "2023-01-26"; -5 dias a la fecha actual


        $subscriptions = DB::table('subscriptions')->where('user_id', auth()->user()->id)->get();
        if ($subscriptions != null) {
            foreach ($subscriptions as $subscription) {

                $con = Notification_suscription::where('user_id', auth()->user()->id)
                    ->where('suscription_id', $subscription->id)->where('type', 'con_renovacion')->first();

                $sin = Notification_suscription::where('user_id', auth()->user()->id)
                    ->where('suscription_id', $subscription->id)->where('type', 'sin_renovacion')->first();

                $fechaNotificacionCon = Carbon::parse($subscription->created_at)->addDays(25)->toDateString();
                $fechaNotificacionSin = Carbon::parse($subscription->ends_at)->subDays(5)->toDateString();


                if (($subscription->ends_at == null) && ($con == null) && ($hoy == $fechaNotificacionCon)) {


                    Notification_suscription::create([
                        'user_id' => auth()->user()->id,
                        'suscription_id' => $subscription->id,
                        'type' => 'con_renovacion',
                        'dateExpired' => Carbon::parse($subscription->created_at)->addDays(30)->toDateString()
                    ]);
                    $this->emit('pushNotification');
                }
                if ($subscription->ends_at != null && ($sin == null) && ($hoy == $fechaNotificacionSin)) {
                    Notification_suscription::create([
                        'user_id' => auth()->user()->id,
                        'suscription_id' => $subscription->id,
                        'type' => 'sin_renovacion',
                        'dateExpired' => Carbon::parse($subscription->ends_at)->toDateString()
                    ]);
                    $this->emit('pushNotification');
                }
            }
        }
        NotificationIndex::mount();
    }

    public function deleteAll(){
        $this->emit('Are_sure_deleteAll');
    }

    public function yes_deleteAll(){
        DB::table('notification_suscriptions')->where('user_id', auth()->user()->id)->delete();
        $this->emit('renderNotification');
    }

    public function deleteSelected($id){
        $this->emit('Are_sure_deleteSelected', $id);
    }

    public function yes_deleteSelected($id){
        DB::table('notification_suscriptions')->where('id', $id)->delete();
        $this->emit('renderNotification');
    }

    public function has_subscription(){
        $this->emit('renderNotification');
    }

    public function render()
    {
        return view('livewire..notification.notification-index');
    }
}
