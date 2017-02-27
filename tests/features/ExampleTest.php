<?php





class ExampleTest extends FeatureTestCase
{

    //Se agregar esta linea para que cada que ejecutemos
    //las pruebas, se eliminen los datos que ya habia en la  tabla
    //y no nos marque error con los datos que hemos indicado que deben de ser unicos, como el email por ejemplo
    //se puede utilizar el DatabaseMigrations, pero si son muchas las bd, entonces, cada vez que se haga una prueba sera lento, por lo cual se usa este otro elemento

    //para que todo se haga dentro de una transaccion y queda vacia la tabla y no afecta nada 

    //use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_basic_example()
    {

       $user =  factory(\App\User::class)->create([
            'name' => 'Edu Mors Mortis',
            'email'=>'edu@edu.com'
                ]);
       

       $this->actingAs($user,'api')

             ->visit('api/user')
             ->see('Edu Mors Mortis')
             ->see('edu@edu.com');
    }
}
