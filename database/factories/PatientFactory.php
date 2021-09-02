<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year = rand(2005, 2021);
        $month = rand(1, 12);
        $day = rand(1, 28);

        $date = Carbon::create($year,$month ,$day , 0, 0, 0);
        $num=rand(0,1);
        $sexe=['Male','Female'];
        $sexenum = $sexe[$num];
        $num1=rand(0,1);
        $sexe1=['oui','non'];
        $sexenum1 = $sexe1[$num1];
        $loc1=rand(0,5);
        $location=['sfax','tunis','manouba','ben arous','sousse','mestir'];
        $locnum1 = $location[$loc1];
        $contryy=['Tunisia',
        'France',
        'allmend',
        'magreb',
        'algerie',
        'maser'];
        $con=$contryy[$loc1];
        $etatrand=rand(0,3);
        $etatt=['home','hospital','reanimation','save'];
        $et=$etatt[$etatrand];
        return [
            
            'Firstname' => $this->faker->name(),
            'lastname' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'dateofbirth'=> $date->format('Y-m-d') ,
            'address'=> $this->faker->address(),
            'city'=>$locnum1,
            'country'=>$con,
            'state' => Str::random(10),
            'postalcode'=>$this->faker->numberBetween(1111,9999),
            'phone'=>$this->faker->numberBetween(11111111,99999999),
            'gendre'=>$sexenum,
            'covid_check'=>$sexenum1,
            'covid_etat'=>$et,
        ];
    }
}
