import './bootstrap.js';
import './vendor/bootstrap/bootstrap.index.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './vendor/bootstrap/dist/css/bootstrap.min.css';
// import './vendor/bootstrap/dist/js/bootstrap.min.js';



console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
function convertExcel(){
    // récupération des données  html du tableau
    const table = document.querySelector('table')
    let html = table.outerHTML

    //créer un Blob qui contient les données html et le type MIME Excel
    const blob = new Blob([html], {type: 'application/vnd.ms-excel'})
    // créer une url pour le Blob
    const url = URL.createObjectURL(blob)
    console.log(url)

    // créer un élément "a" pour le téléchargement
    const a = document.createElement('a')
    a.href = url

    // nommer le fichier qui sera téléchargé grâce à "a"
    a.download = "tableau.xls"

    // déclencher le téléchargement
    a.click()

    // on détruit l'url
    URL.revokeObjectURL(url)
}

//on déclenche la fonction quand on cliquera sur le bouton avec l'id "exportButton"
document.getElementById('exportButton').addEventListener('click', convertExcel)