
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                var senha = document.getElementById('senha').value;
                var confirmarSenha = document.getElementById('confirmarSenha').value;
                var nascimento = document.getElementById('nascimento').value;

                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                var today = new Date();
                var birthDate = new Date(nascimento);
                var age = today.getFullYear() - birthDate.getFullYear();
                var monthDifference = today.getMonth() - birthDate.getMonth();

                if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                if (age < 18) {
                    event.preventDefault();
                    event.stopPropagation();
                    alert("Você precisa ter pelo menos 18 anos para se cadastrar!");
                }

                form.classList.add('was-validated');
            }, false);
        });

        // Impedir a seleção de datas futuras no campo de data de nascimento
        var nascimentoField = document.getElementById('nascimento');
        var today = new Date().toISOString().split('T')[0];
        nascimentoField.setAttribute('max', today);
    }, false);
    document.getElementById('meuForm').addEventListener('submit', function(event) {
        // Validação Nome
        const nome = document.getElementById('Nome').value;
        const nomeRegex = /^[a-zA-ZÀ-ÿ\s]+$/;
        if (!nomeRegex.test(nome)) {
            alert('O nome não deve conter números ou caracteres especiais.');
            event.preventDefault();
            return;
        }

        // Validação Sobrenome
        const sobrenome = document.getElementById('Sobrenome').value;
        if (!nomeRegex.test(sobrenome)) {
            alert('O sobrenome não deve conter números ou caracteres especiais.');
            event.preventDefault();
            return;
        }

        // Validação Email
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um email válido.');
            event.preventDefault();
            return;
        }

        // Validação Telefone
        const telefone = document.getElementById('telefone').value;
        if (telefone.includes('.') || telefone.includes('-') || telefone.includes('+')) {
            alert('O telefone não deve conter caracteres especiais ou letras.');
            event.preventDefault();
            return;
        }

        // Validação CPF
        const cpf = document.getElementById('cpf').value;
        const cpfRegex = /^\d{11}$/;
        if (!cpfRegex.test(cpf)) {
            alert('O CPF deve conter exatamente 11 dígitos numéricos.');
            event.preventDefault();
            return;
        }
    });
})();
