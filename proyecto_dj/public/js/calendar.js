document.addEventListener("DOMContentLoaded", () => {
    const calendarContainer = document.getElementById("calendar-container");
  
    // Nombres de los días de la semana (lunes a domingo)
    const daysOfWeek = ["L", "M", "X", "J", "V", "S", "D"];
    
    // Año y mes actual
    const currentYear = new Date().getFullYear();
    const currentMonth = new Date().getMonth();
  
    // Crear contenedor del calendario
    const calendar = document.createElement("div");
    calendar.classList.add("calendar-grid");
  
    // Crear encabezados de los días de la semana
    daysOfWeek.forEach((day) => {
      const dayHeader = document.createElement("div");
      dayHeader.textContent = day;
      dayHeader.classList.add("day-name");
      calendar.appendChild(dayHeader);
    });
  
    // Obtener el primer día del mes (lunes es 1)
    const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
    const startDay = (firstDayOfMonth.getDay() === 0) ? 6 : firstDayOfMonth.getDay() - 1;
  
    // Número de días del mes
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
  
    // Crear celdas vacías para alinear el primer día del mes
    for (let i = 0; i < startDay; i++) {
      const emptyCell = document.createElement("div");
      calendar.appendChild(emptyCell);
    }
  
    // Crear las celdas de los días del mes
    for (let day = 1; day <= daysInMonth; day++) {
      const dayCell = document.createElement("div");
      dayCell.textContent = day;
      dayCell.classList.add("calendario__dia");
  
      // Efecto de resaltar al pasar el mouse
      dayCell.addEventListener("mouseover", () => {
        dayCell.style.backgroundColor = "var(--morado)";
        dayCell.style.color = "var(--blanco)";
      });
  
      // Restaurar al quitar el mouse
      dayCell.addEventListener("mouseout", () => {
        dayCell.style.backgroundColor = "";
        dayCell.style.color = "var(--blanco)";
      });
  
      calendar.appendChild(dayCell);
    }
  
    // Agregar el calendario al contenedor
    calendarContainer.appendChild(calendar);
  });