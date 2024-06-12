function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("tab-content");
    var tabLinks = document.getElementsByClassName("tab-link");
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
    
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }
    document.querySelector(`.tab-link[onclick="openTab('${tabName}')"]`).classList.add("active");
}

function redirectToUrl() {
    window.location.href = "https://www.exemplo.com"; // Substitua pelo URL desejado
}

// Inicialize a aba "minhas ideias" como ativa
document.getElementById("ideias").style.display = "block";
document.querySelector('.tab-link[onclick="openTab(\'ideias\')"]').classList.add("active");


