<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Journée des coordinateurs</title>

    <meta name="description" content="Slides - Journée des coordinateurs" />
    <meta name="author" content="Donovan Tengblad" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="css/impress-demo.css" rel="stylesheet" />
</head>

<body class="impress-not-supported" style="height: 100%; overflow: hidden">

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>
<div id="impress">
    <div id="intro" class="step slide" data-x="0" data-scale="2">
        <center>
            <p>
                <img src="img/logo_web.jpg" alt="Logo innova" width="600px">
                <h1>Journée des coordinateurs</h1>
            </p>
        </center>
    </div>
    <div id="fiches" class="step slide" data-x="3000">
        <h2>Présentation des fiches fonctionnelles</h2>
    </div>
    <div id="github" class="step slide" data-x="3000" data-y="700">
        <h2>Point sur l'état de la plateforme ENPA</h2>
        <ul>
            <li>~ 4 Formations</li>
            <li>~ 2 Langues</li>
            <li>~ 87 Parcours publiés</li>
            <li>~ 350 Etudiants</li>
            <li>~ 10 Tuteurs</li>
        </ul>
    </div>
    <div id="charges" class="step slide" data-y="2000" data-x="3000">
        <h2>Répartition du travail sur les 6 derniers mois</h2>
        <center>
            <canvas id="myChart" width="400" height="400"></canvas>
            <div id="placeholder"></div>
        </center>
    </div>
    <div id="calendrier" class="step calendar" data-x="4500">
        <center>
            <img src="img/calendrier.png" alt="calendrier" />
        </center>
    </div>
    <div id="infra" class="step slide" data-x="0" data-y="1300">
        <h2>Modifications d'infrastructure</h2>
        <h3>Fait</h3>
        <ul>
            <li>Augmentation de capacité du serveur de développement</li>
            <li>Mise en place d'une sauvegarde locale des données Amazon S3</li>
            <li>Mise en place d'un outil de monitoring de serveurs (Longview)</li>
        </ul>
        <h3>À faire</h3>
        <ul>
            <li>Migration des plateformes de test/eval/démo</li>
            <li>Utiliser Amazon S3 comme support de stockage</li>
            <li>Mise en cache des médias</li>
            <li>Mise en place d'un système d'email transactionel</li>
            <li>Mise en place d'un mailcatcher sur le serveur de dev</li>
            <li>Inspecter les lenteurs sur SELF</li>
        </ul>
    </div>
    <div id="longview" class="step slide" data-x="1500" data-y="1500">
        <h2>Stats sur la capacité des serveurs (Monitoring Longview)</h2>
        <center>
            <img src="img/longview.png" alt="Longview" width="65%"/>
        </center>
    </div>
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>
</div>
<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>
<script>
if ("ontouchstart" in document.documentElement) {
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>
<script src="js/impress.js"></script>
<script src="js/Chart.js"></script>
<script src="js/legend.js"></script>
<script>impress().init();</script>
<script charset="utf-8">
    var data = [
      {
          value: 30,
          color:"#00A0B0",
          highlight: "#FF5A5E",
          label: "30% (1,5 ETP) : ENPA"
      },
      {
          value: 30,
          color: "#6A4A3C",
          highlight: "#5AD3D1",
          label: "30% (1,5 ETP)  : SELF"
      },
      {
          value: 20,
          color: "#EDC951",
          highlight: "#FFC870",
          label: "20% (1 ETP)  : Themppo/COCA/Kinéphones"
      },
      {
          value: 10,
          color: "#CC333F",
          highlight: "#FFC870",
          label: "10%  (0,5 ETP)  : Gestion de projet"
      },
      {
          value: 10,
          color: "#EB6841",
          highlight: "#FFC870",
          label: "10% (0,5 ETP)  : Gestion de l'infrastructure"
      }
  ];

  var ctx = document.getElementById("myChart").getContext("2d");
  var myNewChart = new Chart(ctx).Pie(data);
  legend(document.getElementById('placeholder'), data);

</script>
</body>
</html>
