document.getElementById('cpf').addEventListener('input', function (e) {
    let value = e.target.value;
    
    // Remove any non-digit character
    value = value.replace(/\D/g, '');

    // Apply the CPF mask
    value = value.replace(/(\d{3})(\d)/, '$1.$2');
    value = value.replace(/(\d{3})(\d)/, '$1.$2');
    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

    // Set the value back to the input field
    e.target.value = value;
});