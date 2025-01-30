<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function insertarDatos()
{
    // Insertar usuarios
    $usuarios = [
        ['nombre' => 'Juan Pérez', 'correo' => 'juan@example.com', 'telefono' => '123456789'],
        ['nombre' => 'María López', 'correo' => 'maria@example.com', 'telefono' => '987654321'],
        ['nombre' => 'Roberto Gómez', 'correo' => 'roberto@example.com', 'telefono' => '555555555'],
        ['nombre' => 'Laura Ramírez', 'correo' => 'laura@example.com', 'telefono' => '111111111'],
        ['nombre' => 'Carlos Sánchez', 'correo' => 'carlos@example.com', 'telefono' => '222222222'],
    ];
    Usuario::insert($usuarios);

    // Insertar pedidos
    $pedidos = [
        ['producto' => 'Laptop', 'cantidad' => 1, 'total' => 1200.50, 'id_usuario' => 1],
        ['producto' => 'Mouse', 'cantidad' => 2, 'total' => 50.00, 'id_usuario' => 2],
        ['producto' => 'Teclado', 'cantidad' => 1, 'total' => 75.00, 'id_usuario' => 3],
        ['producto' => 'Monitor', 'cantidad' => 1, 'total' => 200.00, 'id_usuario' => 4],
        ['producto' => 'Impresora', 'cantidad' => 1, 'total' => 150.00, 'id_usuario' => 5],
    ];
    Pedido::insert($pedidos);

    return response()->json(['message' => 'Datos insertados correctamente']);
}
public function pedidosUsuario2()
{
    $pedidos = Pedido::where('id_usuario', 2)->get();
    return response()->json($pedidos);
}
 
public function pedidosConUsuarios()
{
    $pedidos = Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
        ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
        ->get();
    return response()->json($pedidos);
}

public function pedidosRango100a250()
{
    $pedidos = Pedido::whereBetween('total', [100, 250])->get();
    return response()->json($pedidos);
}

public function usuariosNombreR()
{
    $usuarios = Usuario::where('nombre', 'like', 'R%')->get();
    return response()->json($usuarios);
}

public function totalPedidosUsuario5()
{
    $total = Pedido::where('id_usuario', 5)->count();
    return response()->json(['total_pedidos' => $total]);
}

public function pedidosConUsuariosOrdenados()
{
    $pedidos = Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
        ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
        ->orderBy('pedidos.total', 'desc')
        ->get();
    return response()->json($pedidos);
}
public function sumaTotalPedidos()
{
    $suma = Pedido::sum('total');
    return response()->json(['suma_total' => $suma]);
}

public function pedidoMasEconomico()
{
    $pedido = Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
        ->select('pedidos.*', 'usuarios.nombre')
        ->orderBy('pedidos.total', 'asc')
        ->first();
    return response()->json($pedido);
}

public function pedidosAgrupadosPorUsuario()
{
    $pedidos = Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
        ->select('usuarios.nombre', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
        ->orderBy('usuarios.id')
        ->get();
    return response()->json($pedidos);
}

}
