// ########### fonction Landry pour emploie du temps ####### 
document.addEventListener('DOMContentLoaded', function () {
  var evenementDateDebut = null;
  var evenementDateFin = null;
  var calendarEl = document.getElementById('calendar');
  var calendarOptions = {
    // initialView: 'dayGridMonth', 
    timeZone: 'UTC',
    selectable: true,
    initialView: 'timeGridWeek', // Affichage du calendrier diviser en heures pour les jours
    events: evenements
  };

  //utlisateur == "Administrateur" :  une condition ici pour limiter que seul les Administrateur peut éditer
 // var role_id = role_id,
  if(utilisateurConnecte && utilisateurConnecte.role_id == 3){
    calendarOptions.dateClick = function(info) {//Qunad on click sur une date du calendrier
      $('#newEvent').modal('show');//On affiche la fenetre de sasi
      $('#eventDate').text(`Le ${info.date.getUTCDate()}-${info.date.getUTCMonth() + 1}-${info.date.getUTCFullYear()} ${info.date.getUTCHours()}:${info.date.getUTCMinutes()}:${info.date.getUTCSeconds()}`); //on affiche la date choisi
      $('#dateDebut').attr("value", info.date.toJSON());// on rempli le champ hidden  correspondant à la date de début
    };
    calendarOptions.select = function(info) {//Quand on selectionne des dates sur le calendrier
      $('#newEvent').modal('show');//On affiche la fenetre de sasi
      $('#eventDate').text(`Le ${info.start.getUTCDate()}-${info.start.getUTCMonth() + 1}-${info.start.getUTCFullYear()} ${info.start.getUTCHours()}:${info.start.getUTCMinutes()}:${info.start.getUTCSeconds()} à ${info.end.getUTCDate()}-${info.end.getUTCMonth() + 1}-${info.end.getUTCFullYear()} ${info.end.getUTCHours()}:${info.end.getUTCMinutes()}:${info.end.getUTCSeconds()}`);//on affiche les dates choisi
      $('#dateDebut').attr("value", info.start.toJSON());// on rempli le champ hidden  correspondant à la date de début
      $('#dateFin').attr("value", info.end.toJSON());//et la date de fin
    }
  }
                          /* je veux affiche que sa promotion dans le calendrier */
  if (utilisateurConnecte && utilisateurConnecte.role_id != 3) { //à remplire pour afficher calendrier de la promotion
    
  }

  var calendar = new FullCalendar.Calendar(calendarEl, calendarOptions);
  
  calendar.render();
  
});

 // ########### fin fonction Landry pour emploie du temps ####### 

var check = function () {
  if (document.getElementById('role').value === 'Apprenant') {
    document.getElementById('promotion').style.display = 'block';
  }
  if (document.getElementById('role').value === 'Formateur') {
    document.getElementById('promotion').style.display = 'none';
  }

  console.log('Script chargé');
}

// Fonction pour confirmation de suppression
var supForm = function (id) {
let validationForm = document.getElementById('validationForm');
      validationForm.setAttribute('action',"../includes/supprimer_formateurs.php?id="+id);
  }

var supApp = function (id) {
    let validationFormApp = document.getElementById('validationFormApp');
    validationFormApp.setAttribute('action',"../includes/supprimer_apprenant.php?id="+id);
      }

var supTut = function (id) {
    let validationFormTut = document.getElementById('validationFormTut');
        validationFormTut.setAttribute('action',"../includes/supprimer_tuteur.php?id="+id);
          }

