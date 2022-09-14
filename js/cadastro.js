    function validarSenha() {
        const senha = document.getElementsByName('password').value;
        const senhaC = document.getElementsByName('re_senha').value;

        if (senha != senhaC) {
            senhaC.setCustomValidity("Senhas diferentes!");
            return false;
        } else {
            senhaC.setCustomValidity('');  
            return true;
      }
    }