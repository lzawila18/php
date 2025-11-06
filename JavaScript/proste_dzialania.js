function calculate(operation) {
    const num1 = document.getElementById('num1').value;
    const num2 = document.getElementById('num2').value;
    const resultDiv = document.getElementById('result');

    if (num1 === '' || num2 === '') {
        resultDiv.innerHTML = 'Proszę uzupełnić obie liczby.';
        return;
    }

    const n1 = parseFloat(num1);
    const n2 = parseFloat(num2);

    if (isNaN(n1) || isNaN(n2)) {
        resultDiv.innerHTML = 'Proszę wprowadzić prawidłowe liczby.';
        return;
    }

    let result;
    switch (operation) { 
        case 'add':
            result = n1 + n2;
            break;
        case 'subtract':
            result = n1 - n2;
            break;
        case 'multiply':
            result = n1 * n2;
            break;
        case 'divide':
            if (n2 === 0) {
                resultDiv.innerHTML = 'Nie wolno dzielić przez zero.';
                return;
            }
            result = n1 / n2;
            break;
        default:
            resultDiv.innerHTML = 'Nieznana operacja.';
            return;
    }

    resultDiv.innerHTML = 'Wynik: ' + result;
}
