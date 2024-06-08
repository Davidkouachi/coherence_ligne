window.onload = function() {
    document.getElementById('btn_download_cause').addEventListener('click', function() {
        // Sélection du formulaire à imprimer
        const form = document.getElementById('cadre_cause');

        // Configuration pour la génération PDF
        const opt = {
            margin: 10,
            filename: 'Fiche cause.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }, // Gestion des sauts de page
            header: [{
                content: 'Mon Header',
                height: '50mm',
                styles: {
                    textAlign: 'center',
                },
            }],
            footer: [{
                content: 'Page {page}/{total}',
                height: '50mm',
                styles: {
                    textAlign: 'center',
                },
            }],
        };

        // Génération du PDF à partir du formulaire
        const pdf = html2pdf().from(form).set(opt).save();
    });
};
