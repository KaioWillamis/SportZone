function toggleDarkMode() {
    const link = document.getElementById("estilobranco");

    // Verifica o arquivo atual e troca
    if (link.getAttribute("href") === "style/index.css") {
        link.setAttribute("href", "style/darkmode.css");
        localStorage.setItem("theme", "dark");
    } else {
        link.setAttribute("href", "style/index.css");
        localStorage.setItem("theme", "light");
    }
}

// Aplica o tema salvo no localStorage ao carregar a página
document.addEventListener("DOMContentLoaded", () => {
    const theme = localStorage.getItem("theme");
    const link = document.getElementById("estilobranco");
    const currentPage = window.location.pathname.split("/").pop(); // Obtém o nome da página atual

    // Checa se estamos em uma das páginas específicas e aplica o tema
    const pagesWithTheme = ["futebol.html", "corrida.html", "sportzone.html"];
    if (pagesWithTheme.includes(currentPage)) {
        if (theme === "dark") {
            link.setAttribute("href", "style/darkmode.css");
        } else {
            link.setAttribute("href", "style/index.css");
        }
    } else {
        // Para todas as outras páginas, aplica o tema salvo no localStorage
        if (theme === "dark") {
            link.setAttribute("href", "style/darkmode.css");
        } else {
            link.setAttribute("href", "style/index.css");
        }
    }
});

