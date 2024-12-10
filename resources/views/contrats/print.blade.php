<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrat de Partenariat Commercial</title>
</head>
<body>
     <!-- Ajoutez du style pour le contrat -->
     <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f7fc;
            margin: 0;
            padding: 20px;
        }

        .contrat {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2em;
            text-align: center;
            color: #2b3a42;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.3em;
            color: #3a4e61;
            margin-top: 30px;
        }

        .field {
            margin-bottom: 15px;
        }

        .field p {
            font-size: 1.1em;
            margin: 8px 0;
            color: #4d5a5e;
        }

        .field a {
            color: #1e66f5;
            text-decoration: none;
        }

        .field a:hover {
            text-decoration: underline;
        }

        .field strong {
            color: #2b3a42;
        }

        .field ul {
            list-style-type: none;
            padding-left: 0;
        }

        .field ul li {
            padding: 5px;
            margin: 3px 0;
        }

        .field ul li strong {
            color: #2b3a42;
        }

        .field .note {
            font-style: italic;
            font-size: 1em;
            color: #7a7a7a;
        }

        .signature-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #e2e2e2;
            text-align: center;
        }

        .signature-section p {
            margin-bottom: 40px;
        }

        .signature-line {
            width: 40%;
            border-bottom: 1px solid #2b3a42;
            margin: 20px auto;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #888;
        }

        /* Impression : Préparer la page pour une bonne présentation à l'impression */
        @media print {
            body {
                margin: 0;
                padding: 0;
                background: none;
                color: #000;
            }

            .contrat {
                box-shadow: none;
                padding: 10px;
            }

            h1 {
                font-size: 2.5em;
                text-align: center;
                margin-bottom: 40px;
            }

            .signature-section {
                margin-top: 60px;
                border-top: 2px solid #e2e2e2;
            }

            .signature-line {
                width: 60%;
            }

            .footer {
                margin-top: 40px;
            }
        }
    </style>
    <!-- Conteneur principal du contenu du contrat -->
    <div class="contrat">
        <h1>Contrat de partenariat commercial</h1>

        <!-- Informations sur le contrat -->
        <div class="field">
            <p>Ce contrat est fait ce jour <strong>{{ $contrat->date_contrat }}</strong>, en <strong>{{ $contrat->nombre_copies }}</strong>copies originales, entre :</p>
            <ul>
                @foreach ($contrat->partenaires as $partenaire)
                    <li><strong>{{ $partenaire->nom }}</strong></li>
                @endforeach
            </ul>
        </div>

        <!-- 1. NOM DU PARTENARIAT ET ACTIVITE -->
        <div class="field">
            <h3>1. NOM DU PARTENARIAT ET ACTIVITE</h3>
            <p><strong>1.1 Nature des activités :</strong> <a>Les Partenaires cités ci-dessus donnent leur accord d'être considérés comme des partenaires commerciaux pour les fins suivantes :</a></p>
            <p><strong>{{ $contrat->activite }}</strong></p>

            <p><strong>1.2 Nom :</strong> <a>Les Partenaires cités ci-dessus donnent leur accord, pour que le partenariat commercial soit exercé sous le nom:</a></p>
            <p><strong>{{ $contrat->nom_partenariat }}</strong></p>

            <p><strong>1.3 Adresse officielle :</strong> <a>Les Partenaires cités ci-dessus donnent leur accord pour que le siège du partenariat commercial soit :</a></p>
            <p><strong>{{ $contrat->adresse_siege }}</strong></p>
        </div>

        <!-- 2. TERMES -->
        <div class="field">
            <h3>2. TERMES</h3>
            <p><strong>2.1 :</strong> <a>Le partenariat commence le</a> <strong>{{ $contrat->date_terme }}</strong><a> et continue jusqu'à la fin de cet accord.</a></p>
        </div>

        <!-- 3. CONTRIBUTION AU PARTENARIAT -->
        <div class="field">
            <h3>3. CONTRIBUTION AU PARTENARIAT</h3>
            <p>3.1 La contribution de chaque partenaire au capital listée ci-dessous se compose des élément suivants :</p>
            <p><strong>{{ $contrat->contributions }}</strong></p>
        </div>

        <!-- 4. RÉPARTITION DES BÉNÉFICES ET DES PERTES -->
        <div class="field">
            <h3>4. RÉPARTITION DES BÉNÉFICES ET DES PERTES</h3>
            <p><a>Les Partenaires se partageront les profits et les pertes du partenariat commercial de la manière suivante :</a></p>
            <p><strong>{{ $contrat->repartition }}</strong></p>
        </div>

        <!-- 5. PARTENAIRES ADDITIONNELS -->
        <div class="field">
            <h3>5. PARTENAIRES ADDITIONNELS</h3>
            <p><strong>5.1 :</strong> <a>Aucune personne ne peut être ajoutée en tant que partenaire et aucune autre activité ne peut être menée par le partenariat sans le consentement écrit de tous les partenaires.</a></p>
        </div>

        <!-- 6. MODALITÉS BANCAIRES ET TERMES FINANCIERS -->
        <div class="field">
            <h3>6. MODALITÉS BANCAIRES ET TERMES FINANCIERS</h3>
            <p><strong>6.1 :</strong> <a>Les Partenaires doivent avoir un compte bancaire au nom du partenariat sur lequel les chèques doivent être signés par au moins</a> <strong>{{ $contrat->nombre_signataires }}</strong><a> des Partenaires.</a></p>
            <p><strong>6.2 :</strong> <a>Les Partenaires doivent tenir une comptabilité complète du partenariat et la rendre disponible à tous les Partenaires à tout moment.</a></p>
        </div>

        <!-- 7. GESTION DES ACTIVITÉS DE PARTENARIAT -->
        <div class="field">
            <h3>7. GESTION DES ACTIVITÉS DE PARTENARIAT</h3>
            <p><strong>7.1 :</strong> <a>Chaque partenaire peut prendre part dans la gestion du partenariat.</a></p>
            <p><strong>7.2 :</strong> <a>Tout désaccord sera réglé par les partenaires détenant la majorité des parts du partenariat.</a></p>
        </div>

        <!-- 8. DÉPART D'UN PARTENAIRE COMMERCIAL -->
        <div class="field">
            <h3>8. DÉPART D'UN PARTENAIRE COMMERCIAL</h3>
            <p><strong>8.1 :</strong> <a>Si un partenaire se retire du partenariat, les autres partenaires peuvent continuer à exploiter le partenariat sous le même nom.</a></p>
            <p><strong>8.2 :</strong> <a>Le partenaire qui se retire est tenu de donner un préavis écrit d'au moins soixante (60) jours de son intention de se retirer et est tenu de vendre ses parts du partenariat commercial.</a></p>
            <p><strong>8.3 :</strong> <a>8.3 Aucun partenaire ne doit céder ses actions dans le partenariat commercial à une autre partie sans le consentement écrit des autres partenaires.</a></p>
            <p><strong>8.4 :</strong><a>Le ou les partenaires restants paieront au partenaire qui se retire, ou au représentant légal
                du partenaire décédé ou handicapé, la valeur de ses parts dans le partenariat, ou (a) la somme
                de son capital, (b) des emprunts impayés qui lui sont dus, c) sa quote-part des bénéfices nets
                cumulés non distribués dans son compte, et (d) son intérêt dans toute plus-value
                préalablement convenue de la valeur du partenariat par rapport à sa valeur comptable.
                Aucune valeur de bonne volonté ne doit être incluse dans la détermination de la valeur des
                parts du partenaire.</a></p>
        </div>

        <!-- 9. CLAUSE DE NON CONCURRENCE -->
        <div class="field">
            <h3>9. CLAUSE DE NON CONCURRENCE</h3>
            <p><strong>9.1 :</strong> <a>Un partenaire qui se retire ne doit pas s'engager dans une activité concurrente pendant</a> <strong>{{ $contrat->date_clause }}</strong><a>.</a></p>
        </div>

        <!-- 10. MODIFICATION DE L’ACCORD -->
        <div class="field">
            <h3>10. MODIFICATION DE L’ACCORD</h3>
            <p><strong>10.1 :</strong> <a>Ce contrat ne peut être modifié sans le consentement écrit de tous les partenaires.</a></p>
        </div>

        <!-- 11. DIVERS -->
        <div class="field">
            <h3>11. DIVERS</h3>
            <p><strong>11.1 :</strong> <a>Si une disposition ou une partie d'une disposition de la présente convention de
                partenariat commercial est non applicable pour une quelconque raison, elle sera dissociée
                sans affecter la validité du reste de la convention.</a></p>
            <p><strong>11.2 :</strong> <a>Cet accord de partenariat commercial lie les partenaires commerciaux et pourra servir à
leurs héritiers, exécuteurs testamentaires, administrateurs, représentants personnels,
successeurs et ayants droit respectifs.</a></p>
        </div>

        <!-- 12. JURIDICTION -->
        <div class="field">
            <h3>12. JURIDICTION</h3>
            <p><strong>12.1 :</strong> <a>Le contrat est régi par les lois de l'État de</a> <strong>{{ $contrat->juridiction_etat }}</strong><a>.</a></p>
        </div>
    </div>
    <!-- Script pour déclencher l'impression automatiquement -->
         <script>
            window.onload = function() {
                window.print();
            };
        </script>
</body>
</html>
