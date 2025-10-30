<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mascotas;
use Illuminate\Support\Facades\DB ;

//Editar vista
class PetsController extends Controller
{
    public function delete($id_mascota)
{
    
    // Lógica para eliminar la mascota de la base de datos
    DB::table('mascotas')->where('id_mascota', $id_mascota)->delete();
    //dd($id_mascota);
    return redirect()->route('pet.index')->with('message', 'Mascota eliminada con éxito.');
}

public function store(Request $request)
{
   
    // Validar los datos recibidos
   


    // Crear una nueva instancia de Mascota
    $mascota = new mascotas();

    // Asignar valores a los campos
    $mascota->nombre = $request->get('nombre');
    $mascota->historia = $request->get('historia');
    $mascota->edad = $request->get('edad');
    $mascota->estado = $request->get('estado');
    $mascota->raza = $request->get('raza');
    $mascota->color = $request->get('color');
    $mascota->tipo = $request->get('tipo');
    $mascota->tamano = $request->get('tamano');
    $mascota->sexo = $request->get('sexo');
    $mascota->fecha_ingreso = $request->get('fecha');
    
    // Manejar el campo de imagen si se subió una
    if ($request->hasFile('foto')) {
        $imagePath = $request->file('foto')->store('fotos_mascotas', 'public');
        $mascota->foto = $imagePath; // Guarda la ruta de la imagen
    }
    
    // Guardar la mascota en la base de datos
    $mascota->save();

    // Redirigir a la vista de todas las mascotas con un mensaje de éxito
    return redirect('/pet')->with('success', 'La mascota ha sido registrada correctamente.');
}


    public function edit(Request $request)
    {

        $id=$request->id_mascota;
    
    
      $message="De click en el botón listo cuando desea guardar";

        $mascota = DB::table('mascotas')
        ->where('id_mascota', $id)
        ->first();

        return view('edit_pet', compact('mascota'))
        ->with('id_mascota',$id)
        ->with('message',$message)
        ;
    }  
    
    
//aqui es donde se edita y se guarda el formulario de editar mascota
    public function editar(Request $request , $id)
    {

      // Validar los datos recibidos del formulario
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'edad' => 'required|string|max:255',
        'raza' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'tipo' => 'required|string|max:255',
        'tamano' => 'required|string|max:255',
        'historia' => 'nullable|string',
        // Agrega más reglas de validación según sea necesario
    ]);

    // Actualizar la mascota en la base de datos
    DB::table('mascotas')
        ->where('id_mascota', $id)
        ->update([
            'nombre' => $validatedData['nombre'],
            'edad' => $validatedData['edad'],
            'raza' => $validatedData['raza'],
            'color' => $validatedData['color'],
            'tipo' => $validatedData['tipo'],
            'tamano' =>$validatedData['tamano'],
            'historia' => $validatedData['historia'],
            // Agrega más campos según sea necesario
        ]);
        $message="La mascota ha sido editada";
  //  return redirect()->route('pets.editar', ['id_mascota' => $id])
        //             ->with('message',  $message);
        $mascota = DB::table('mascotas')
        ->where('id_mascota', $id)
        ->first();


                    return view('edit_pet', compact('mascota'))
                    ->with('id_mascota',$id)
                    ->with('message',$message)
                    ;


    }  
    
    


    public function info($id_mascota)
    {
    
        $mascota = DB::table('mascotas')
        ->where('id_mascota', $id_mascota)
        ->first();

 $mascotas = DB::table('mascotas')
        ->get();

        return view('info', compact('mascota','mascotas'))
        ->with('id_mascota',$id_mascota)
        ;

    }

    public function index() {
        $Mascotas = Mascotas::all();
        return view('info', compact('Mascotas'));
    }
    







}
