const menu = document.querySelector(".nav_data");
    const openMenuBtn = document.querySelector(".open-menu-btn");
    const closeMenuBtn = document.querySelector(".close-menu-btn");

    [openMenuBtn, closeMenuBtn].forEach((btn) => {
        btn.addEventListener("click", ()=>{
            menu.classList.toggle("open");
            menu.style.transition = "transform 0.5s ease";

        });
    });

