document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('mostrarTelefono').addEventListener('click', function () {
      const telefono = document.getElementById('telefono');
      if (telefono.classList.contains('hidden')) {
        telefono.classList.remove('hidden');
        telefono.classList.add('mostrar');
      } else {
        telefono.classList.remove('mostrar');
        telefono.classList.add('hidden');
      }
    });
  });