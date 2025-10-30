<!--<!DOCTYPE html>-->
<!--<html lang="es">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Nuestros Productos | Patitas Occi</title>-->
<!--    <style>-->
<!--        /* Estilos básicos */-->
<!--        body {-->
<!--            font-family: Arial, sans-serif;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--            background-color: #f4f4f4;-->
<!--        }-->

<!--        .productos-container {-->
<!--            max-width: 1200px;-->
<!--            margin: 0 auto;-->
<!--            padding: 20px;-->
<!--            background: #fff;-->
<!--        }-->

<!--        .productos-titulo {-->
<!--            text-align: center;-->
<!--            font-size: 2.5rem;-->
<!--            margin-bottom: 20px;-->
<!--            color: #333;-->
<!--        }-->

<!--        .productos-grid {-->
<!--            display: grid;-->
<!--            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));-->
<!--            gap: 20px;-->
<!--            margin-top: 30px;-->
<!--        }-->

<!--        .producto-card {-->
<!--            background: #fff;-->
<!--            border-radius: 10px;-->
<!--            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);-->
<!--            transition: transform 0.3s ease, box-shadow 0.3s ease;-->
<!--            position: relative;-->
<!--            overflow: hidden;-->
<!--        }-->

<!--        .producto-card:hover {-->
<!--            transform: translateY(-10px);-->
<!--            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);-->
<!--        }-->

<!--        .producto-imagen {-->
<!--            width: 100%;-->
<!--            height: 200px;-->
<!--            object-fit: cover;-->
<!--        }-->

<!--        .producto-info {-->
<!--            padding: 15px;-->
<!--            text-align: left;-->
<!--        }-->

<!--        .producto-nombre {-->
<!--            font-size: 1.5rem;-->
<!--            margin: 10px 0;-->
<!--            color: #333;-->
<!--        }-->

<!--        .producto-descripcion {-->
<!--            font-size: 1rem;-->
<!--            color: #666;-->
<!--            margin-bottom: 10px;-->
<!--        }-->

<!--        .producto-precio {-->
<!--            font-size: 1.2rem;-->
<!--            color: #28a745;-->
<!--            font-weight: bold;-->
<!--        }-->

<!--        .producto-btn {-->
<!--            display: inline-block;-->
<!--            background: #28a745;-->
<!--            color: #fff;-->
<!--            padding: 10px 20px;-->
<!--            border: none;-->
<!--            border-radius: 5px;-->
<!--            cursor: pointer;-->
<!--            margin-top: 10px;-->
<!--            transition: background 0.3s ease;-->
<!--        }-->

<!--        .producto-btn:hover {-->
<!--            background: #218838;-->
<!--        }-->

<!--        /* Estilos del carrito */-->
<!--        .carrito {-->
<!--            margin-top: 40px;-->
<!--            background: #f9f9f9;-->
<!--            padding: 20px;-->
<!--            border-radius: 10px;-->
<!--            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);-->
<!--            position: sticky;-->
<!--            top: 20px;-->
<!--        }-->

<!--        .carrito-titulo {-->
<!--            font-size: 2rem;-->
<!--            margin-bottom: 20px;-->
<!--            color: #333;-->
<!--        }-->

<!--        .carrito-items {-->
<!--            list-style: none;-->
<!--            padding: 0;-->
<!--            margin: 0;-->
<!--            font-size: 1rem;-->
<!--        }-->

<!--        .carrito-items li {-->
<!--            margin-bottom: 15px;-->
<!--            display: flex;-->
<!--            justify-content: space-between;-->
<!--        }-->

<!--        .carrito-total {-->
<!--            font-size: 1.5rem;-->
<!--            margin: 20px 0;-->
<!--            font-weight: bold;-->
<!--        }-->

<!--        .carrito-vaciar {-->
<!--            background: #dc3545;-->
<!--            color: #fff;-->
<!--            border: none;-->
<!--            padding: 10px 20px;-->
<!--            border-radius: 5px;-->
<!--            cursor: pointer;-->
<!--            transition: background 0.3s ease;-->
<!--        }-->

<!--        .carrito-vaciar:hover {-->
<!--            background: #c82333;-->
<!--        }-->

<!--        /* Responsividad */-->
<!--        @media (max-width: 768px) {-->
<!--            .productos-grid {-->
<!--                grid-template-columns: 1fr 1fr;-->
<!--            }-->
<!--        }-->

<!--        @media (max-width: 480px) {-->
<!--            .productos-grid {-->
<!--                grid-template-columns: 1fr;-->
<!--            }-->

<!--            .producto-titulo {-->
<!--                font-size: 2rem;-->
<!--            }-->

<!--            .producto-btn {-->
<!--                width: 100%;-->
<!--            }-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->

<!--    <div class="productos-container">-->
<!--        <h1 class="productos-titulo">Nuestros Productos</h1>-->
<!--        <div class="productos-grid">-->
<!--            @foreach ($productos as $producto)-->
<!--            <div class="producto-card" data-id="{{ $producto->id }}">-->
<!--                <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="producto-imagen">-->
<!--                <div class="producto-info">-->
<!--                    <h2 class="producto-nombre">{{ $producto->nombre }}</h2>-->
<!--                    <p class="producto-descripcion">{{ $producto->descripcion }}</p>-->
<!--                    <span class="producto-precio">${{ $producto->precio, 2 }}</span>-->
<!--                    <button class="producto-btn agregar-carrito">Añadir al Carrito</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            @endforeach-->
<!--        </div>-->

        <!-- Carrito -->
<!--        <div class="carrito">-->
<!--            <h2 class="carrito-titulo">Carrito</h2>-->
<!--            <ul class="carrito-items">-->
                <!-- Los productos añadidos al carrito se mostrarán aquí -->
<!--            </ul>-->
<!--            <div class="carrito-total">-->
<!--                Total: <span id="carrito-total-precio">$0.00</span>-->
<!--            </div>-->
<!--            <button class="carrito-vaciar">Vaciar Carrito</button>-->
<!--        </div>-->
<!--    </div>-->

<!--    <script>-->
<!--        // Variables-->
<!--        const botonesAgregar = document.querySelectorAll('.agregar-carrito');-->
<!--        const carritoItems = document.querySelector('.carrito-items');-->
<!--        const carritoTotalPrecio = document.getElementById('carrito-total-precio');-->
<!--        const botonVaciarCarrito = document.querySelector('.carrito-vaciar');-->
<!--        let carrito = [];-->

<!--        // Función para actualizar el carrito-->
<!--        function actualizarCarrito() {-->
<!--            carritoItems.innerHTML = '';-->
<!--            let total = 0;-->

<!--            carrito.forEach(producto => {-->
<!--                const li = document.createElement('li');-->
<!--                li.innerHTML = `${producto.nombre} - $${producto.precio.toFixed(2)} (x${producto.cantidad})`;-->
<!--                carritoItems.appendChild(li);-->
<!--                total += producto.precio * producto.cantidad;-->
<!--            });-->

<!--            carritoTotalPrecio.textContent = `$${total.toFixed(2)}`;-->
<!--        }-->

<!--        // Evento para agregar productos al carrito-->
<!--        botonesAgregar.forEach(boton => {-->
<!--            boton.addEventListener('click', (e) => {-->
<!--                const card = e.target.closest('.producto-card');-->
<!--                const id = card.dataset.id;-->
<!--                const nombre = card.querySelector('.producto-nombre').textContent;-->
<!--                const precio = parseFloat(card.querySelector('.producto-precio').textContent.replace('$', ''));-->

<!--                // Verificar si ya está en el carrito-->
<!--                const productoExistente = carrito.find(p => p.id === id);-->
<!--                if (productoExistente) {-->
<!--                    productoExistente.cantidad++;-->
<!--                } else {-->
<!--                    carrito.push({ id, nombre, precio, cantidad: 1 });-->
<!--                }-->

<!--                actualizarCarrito();-->
<!--            });-->
<!--        });-->

<!--        // Vaciar el carrito-->
<!--        botonVaciarCarrito.addEventListener('click', () => {-->
<!--            carrito = [];-->
<!--            actualizarCarrito();-->
<!--        });-->
<!--    </script>-->

<!--</body>-->
<!--</html>-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en Mantenimiento</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f3f3f3;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 800px;
            padding: 40px;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .image {
            width: 200px;
            height: auto;
            margin: 20px auto;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1rem;
            color: #333;
            background-color: #fff;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color: #ff6f61;
            color: #fff;
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }

            p {
                font-size: 1rem;
            }

            .btn {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/6103/6103461.png" alt="Página en mantenimiento" class="image">
        <h1>Estamos en Mantenimiento</h1>
        <p>Gracias por tu paciencia. Pronto estaremos de vuelta con algo increíble para ti.</p>
        <a href="index" class="btn">Ir al Inicio</a>
    </div>

    <script>
        console.log("Página en mantenimiento. Pronto estará disponible.");
    </script>
</body>
</html>
