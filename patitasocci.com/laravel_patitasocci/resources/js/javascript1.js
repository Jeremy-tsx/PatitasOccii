document.addEventListener('DOMContentLoaded', function () {
    var carousel = new bootstrap.Carousel('#cardCarousel', {
        interval: 117000, // Cambia cada 5 segundos
        wrap: true
    });

    var items = document.querySelectorAll('.carousel .carousel-item');

    items.forEach((el) => {
        const minPerSlide = 3;
        let next = el.nextElementSibling;
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                next = items[0];
            }
            let cloneChild = next.cloneNode(true);
            el.appendChild(cloneChild.children[0]);
            next = next.nextElementSibling;
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const menuToggleBtn = document.getElementById("menuToggleBtn");
    const navbarSupportedContent = document.getElementById("navbarSupportedContent");
    const userIcon = document.getElementById("userIcon");
    const mobileAuthButtons = document.getElementById("mobileAuthButtons");
  
    menuToggleBtn.addEventListener("click", function () {
      if (navbarSupportedContent.classList.contains("show")) {
        // Menú se está cerrando
        userIcon.classList.remove("d-none"); // Mostrar ícono de usuario
        mobileAuthButtons.classList.add("d-none"); // Ocultar botones
      } else {
        // Menú se está abriendo
        userIcon.classList.add("d-none"); // Ocultar ícono de usuario
        mobileAuthButtons.classList.remove("d-none"); // Mostrar botones
      }
    });
  
    document.getElementById("closeMenuBtn").addEventListener("click", function () {
      // Asegúrate de que los elementos vuelvan a su estado original cuando se cierra el menú
      userIcon.classList.remove("d-none");
      mobileAuthButtons.classList.add("d-none");
    });
  });

document.getElementById('closeMenuBtn').addEventListener('click', function() {
    const navbarCollapse = document.getElementById('navbarSupportedContent');
    navbarCollapse.classList.remove('show'); // Cierra el menú
  });

// Ajustes al form de Contacto
function autoResize(textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
}

function autoResize(textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const nombre = document.getElementById('nombre');
    const telefono = document.getElementById('telefono');
    const email = document.getElementById('email');
    const mensaje = document.getElementById('mensaje');
    const submitBtn = document.getElementById('submitBtn');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        submitBtn.disabled = true;
        formMessage.textContent = '';

        let valid = validateForm();

        if (valid) {
            // Simulate form submission
            
            setTimeout(() => {
                form.submit();
                formMessage.textContent = 'Formulario enviado con éxito!';
                form.reset();
                autoResize(mensaje);
                submitBtn.disabled = false;
            }, 1000);
        } else {
            submitBtn.disabled = false;
        }
    });

    function validateForm() {
        let valid = true;

        clearErrors();

        if (nombre.value.trim() === '') {
            showError('nombre', 'hola');
            valid = false;
        }

        if (telefono.value.trim() === '') {
            showError('telefono', 'El número de teléfono es obligatorio.');
            valid = false;
        } else if (!/^\d+$/.test(telefono.value.trim())) {
            showError('telefono', 'El número de teléfono debe contener solo dígitos.');
            valid = false;
        }

        if (email.value.trim() === '') {
            showError('email', 'El email es obligatorio.');
            valid = false;
        } else if (!/\S+@\S+\.\S+/.test(email.value.trim())) {
            showError('email', 'El email no es válido.');
            valid = false;
        }

        if (mensaje.value.trim() === '') {
            showError('mensaje', 'El mensaje es obligatorio.');
            valid = false;
        }

        return valid;
    }

    function showError(field, message) {
        const errorElement = document.getElementById(field + 'Error');
        errorElement.textContent = message;
    }

    function clearErrors() {
        document.querySelectorAll('.error').forEach(el => el.textContent = '');
    }

    telefono.addEventListener('input', function () {
        let value = telefono.value.replace(/\D/g, '');
        telefono.value = value;
    });
});

// Cards seccion
document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const containerCartProducts = document.querySelector('.container-cart-products');

    // Función para agregar un producto al carrito
    const addToCart = (product) => {
        // Crear elementos del producto en el carrito
        const cartProduct = document.createElement('div');
        cartProduct.classList.add('cart-product');

        const infoCartProduct = document.createElement('div');
        infoCartProduct.classList.add('info-cart-product');

        const cantidadProductoCarrito = document.createElement('span');
        cantidadProductoCarrito.classList.add('cantidad-producto-carrito');
        cantidadProductoCarrito.textContent = '1';

        const tituloProductoCarrito = document.createElement('p');
        tituloProductoCarrito.classList.add('titulo-producto-carrito');
        tituloProductoCarrito.textContent = product.name;

        const precioProductoCarrito = document.createElement('span');
        precioProductoCarrito.classList.add('precio-producto-carrito');
        precioProductoCarrito.textContent = `$${product.price}`;

        infoCartProduct.appendChild(cantidadProductoCarrito);
        infoCartProduct.appendChild(tituloProductoCarrito);
        infoCartProduct.appendChild(precioProductoCarrito);

        const iconClose = document.createElement('svg');
        iconClose.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        iconClose.setAttribute('fill', 'none');
        iconClose.setAttribute('viewBox', '0 0 24 24');
        iconClose.setAttribute('stroke-width', '1.5');
        iconClose.setAttribute('stroke', 'currentColor');
        iconClose.classList.add('icon-close');
        iconClose.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />';

        cartProduct.appendChild(infoCartProduct);
        cartProduct.appendChild(iconClose);

        containerCartProducts.appendChild(cartProduct);
    };

    // Manejar clic en botones "Añadir al carrito"
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const product = {
                name: button.parentElement.querySelector('h2').textContent,
                price: button.parentElement.querySelector('.price').textContent
            };
            addToCart(product);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var closeBtn = document.querySelector('.close-btn');
    var navbarCollapse = document.getElementById('navbarSupportedContent');
    
    closeBtn.addEventListener('click', function () {
    var bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false
    });
    bsCollapse.hide();
    });
});

// Mantenimiento a buy.php
// Asegúrate de que la fecha de cuenta regresiva esté bien configurada
const countdownDate = new Date("Sep 10, 2024 15:37:25").getTime();

const countdownFunction = setInterval(function() {
    const now = new Date().getTime();
    const distance = countdownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML =
        `<span>${days}d</span> <span>${hours}h</span> <span>${minutes}m</span> <span>${seconds}s</span>`;

    if (distance < 0) {
        clearInterval(countdownFunction);
        document.getElementById("countdown").innerHTML = "¡Ya estamos de vuelta!";
    }
}, 1000);

const toggleButton = document.getElementById('toggle-filters');
const filterForm = document.querySelector('.filter-form');

toggleButton.addEventListener('click', () => {
    filterForm.classList.toggle('hidden');
});


// Trancisiones a los enlaces a todos los a
const links = document.querySelectorAll("a");

links.forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault(); // Evita la navegación inmediata
    document.body.classList.add("fade-out");
    setTimeout(() => {
      window.location.href = link.href; // Navega después de la animación
    }, 500); // El tiempo debe coincidir con la duración de la animación
  });
});