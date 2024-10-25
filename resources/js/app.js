import './bootstrap';

//Halaman Pendaftaran
document.addEventListener('DOMContentLoaded', function() {
    const ipkInput = document.getElementById('ipkValue');
    const ipkHidden = document.getElementById('ipkHidden');
    const semesterSelect = document.getElementById('semesterSelect');
    const beasiswaTypeSelect = document.getElementById('beasiswaTypeSelect');
    const documentInput = document.getElementById('documentInput');
    const submitButton = document.getElementById('submitButton');

    const ipkPerSemester = {
        1: 2.8,
        2: 2.9,
        3: 3.0,
        4: 3.1,
        5: 3.2,
        6: 3.3,
        7: 3.4,
        8: 3.5
    };

    // Fungsi untuk update nilai IPK berdasarkan semester
    const updateIPK = (semester) => {
        if (!semester) {
            ipkInput.value = '';
            ipkHidden.value = ''; 
            beasiswaTypeSelect.disabled = true; 
            documentInput.disabled = true; 
            submitButton.disabled = true;
            return;
        }

        const newIPK = ipkPerSemester[semester];
        ipkInput.value = newIPK;
        ipkHidden.value = newIPK;

        //Logika untuk menonaktifkan button
        if (newIPK < 3.0) {
            beasiswaTypeSelect.disabled = true;
            documentInput.disabled = true;
            submitButton.disabled = true;
        } else {
            beasiswaTypeSelect.disabled = false;
            documentInput.disabled = false;
            submitButton.disabled = false;
        }
    };

    semesterSelect.addEventListener('change', function() {
        const selectedSemester = parseInt(semesterSelect.value);
        updateIPK(selectedSemester);
    });

    // Reset form
    const resetButton = document.getElementById('resetButton');
    resetButton.addEventListener('click', function() {
        ipkInput.value = '';
        ipkHidden.value = '';
        semesterSelect.value = '';
        beasiswaTypeSelect.disabled = true;
        documentInput.disabled = true;
        submitButton.disabled = true;
    });
});