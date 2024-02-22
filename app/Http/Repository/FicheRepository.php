<?php 
namespace App\Http\Repository;

use App\Models\Fiches;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class FicheRepository
{
    /**
     * @var $user;
     */
    private $user;

    /**
     * @var $fiche;
     */
    private $fiche;

    public function __construct(User $user, Fiches $fiche)
    {
        $this->user = $user;
        $this->fiche = $fiche;
    }

    public function getIdUser(string $focntion)
    {

        $user = User::where('Nom', $focntion)->first();
        if($user === null){
            return  -1;
        }else{
            return $user->id;
        }
    }

    public function getFiche($from_id){
        return $this->fiche->Query()
        ->where("from_id", $from_id)
        ->get()
        ;
    }
}