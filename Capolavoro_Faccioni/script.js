document.addEventListener('DOMContentLoaded', function () {
    // Ottieni riferimenti agli elementi del DOM
    const amministratoreLabel = document.getElementById('amministratoreLabel');
    const amministratoreInputs = document.getElementById('amministratoreInputs');
    const docenteLabel = document.getElementById('docenteLabel');
    const docenteInputs = document.getElementById('docenteInputs');
    const studenteLabel = document.getElementById('studenteLabel');
    const studenteInputs = document.getElementById('studenteInputs');

    const amministratoreIcon = document.getElementById('amministratoreGirla');
    const docenteIcon = document.getElementById('docenteGirla');
    const studenteIcon = document.getElementById('studenteGirla');

    // Aggiungi gestori di eventi per i click sulle icone
    amministratoreIcon.addEventListener('click', function () {
        document.getElementById('tipoUtente').value = 'amministrazioneL';
        amministratoreLabel.style.display = 'block';
        amministratoreInputs.style.display = 'block';
        docenteLabel.style.display = 'none';
        docenteInputs.style.display = 'none';
        studenteLabel.style.display = 'none';
        studenteInputs.style.display = 'none';
    });

    docenteIcon.addEventListener('click', function () {
        document.getElementById('tipoUtente').value = 'docenteL';
        amministratoreLabel.style.display = 'none';
        amministratoreInputs.style.display = 'none';
        docenteLabel.style.display = 'block';
        docenteInputs.style.display = 'block';
        studenteLabel.style.display = 'none';
        studenteInputs.style.display = 'none';
    });

    studenteIcon.addEventListener('click', function () {
        document.getElementById('tipoUtente').value = 'studenteL';
        amministratoreLabel.style.display = 'none';
        amministratoreInputs.style.display = 'none';
        docenteLabel.style.display = 'none';
        docenteInputs.style.display = 'none';
        studenteLabel.style.display = 'block';
        studenteInputs.style.display = 'block';
    });
});