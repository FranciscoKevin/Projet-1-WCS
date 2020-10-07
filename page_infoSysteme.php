<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Le système de santé en France</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="footer.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>

<body>
    <?php include("header.php")?>
        <section>
            <h1>Système de remboursement et les difféences de praticien</h1>
            <ul>
                <li>Ce faire rembourser sa consultation</li>
                <li>les différences entre les différences proféssionnels de santé</li>
            </ul>
        </section>
        <main>
            <section class="sommaire">
                <h1>Système de remboursement et les difféences de praticien</h1>
                <ul>
                    <li>Ce faire rembourser sa consultation</li>
                    <li>les différences entre les différences proféssionnels de santé</li>
                </ul>
            </section>
            <section>
                <div>
                    <h2>Les différents praticiens</h2>
                    <p>
                        Le psychiatre est diplômé de ses études en école de médecine, suite à 5 ans de spécialisation.
                        Il est donc à ce titre médecin.<br>
                        Le psychiatre peut donc prescrire des médicaments à ses patients, s'il pense que ça 
                        pourrait avoir un impact positif.<br><br>

                        Contrairement au psychologue qui n'a pas 
                        le titre de médecin, car il a suivi un parcours universitaire
                        Ne peut pas préscrire de médicaments.<br>
                        Il accompagne et aide le patient à identifier les raisons de 
                        sa souffrance et à trouver des solutions pour y remédier.
                    </p>
                </div>
                <br>
                <div class="psychiaRemb">
                    <h2>Quelles conséquences pour le remboursement?</h2>
                    <br>
                    <h4>Pour le psychiatre</h4>
                    <p>
                        La consultation chez un psychiatre est prise en charge à 70% par l'assurance maladie, notamment grâce 
                        à son titre de médecin. Le reste à charge est prise par votre mutuelle.
                        <br>
                        Toutefois, le patient devra suivre le parcours de soins 
                        "classique". C'est-à-dire, passer d’abord par son médecin traitant avant de prendre 
                        rendez-vous avec un psychiatre.
                    </p>
                </div>
                <br>
                <div class="psychoRemb">
                    <h4>En ce qui concerne le psychologue</h4>
                    <p>
                        Comme les psychologues n'ont pas de titre de médecin. 
                        L'assurance maladie ne prendra pas en chage les consultations.
                        sachant qu'une consultation coûte entre 40 et 120 euro selon 
                        les praticiens, les spécialités et les villes.
                        <br>
                        Cependant il existe des solutions pour bénéficier de remboursement 
                        de votre séance chez votre psychologue.
                        <ul>
                            <li>En se rendant dans un établissement public (hôpital)</li>
                            <li>en se rendant dans un centre médico-Psychologique</li>
                        </ul>
                        Attention, seul votre médecin traitant peut vous adresser à ses proféssionnels 
                        pour obtenir un remboursement à 100 % par l'assurance maladie, mais le délai 
                        de rendez-vous peut être très long selon les régions.
                        <br>
                        Certaines mutuelles proposent un remboursement des rendez-vous chez le psychologue 
                        soit par forfait annuel ou par nombre de séances.
                        <br><br>
                        <a href="https://www.aide-sociale.fr/psychologue-remboursement/">source</a>
                    </p>
                </div>
            </section>
        </main>
        <?php include("footer.php")?> 
    </body>
</html>
