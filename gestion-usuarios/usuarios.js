const selectModType = document.getElementById("selectModType");
const formNewUser = document.getElementById("formNewUser");
const formEditUser = document.getElementById("formEditUser");
const formDelUser = document.getElementById("formDelUser");
const btnNewUser = document.getElementById("btnNewUser");
const btnEditUser = document.getElementById("btnEditUser");
const btnDelUser = document.getElementById("btnDelUser");

function cangeForm() {
  switch (selectModType.value) {
    case "C":
      // Form crear usuario
      formNewUser.style.display = "block";
      btnNewUser.style.display = "flex";
      // Form no van
      formEditUser.style.display = "none";
      formDelUser.style.display = "none";
      btnEditUser.style.display = "none";
      btnDelUser.style.display = " none";
      break;
    case "D":
      // Form eliminar usuario
      formDelUser.style.display = "block";
      btnDelUser.style.display = "flex";
      // Form no van
      formEditUser.style.display = "none";
      formNewUser.style.display = "none";
      btnEditUser.style.display = "none";
      btnNewUser.style.display = " none";
      break;
    default:
      // Form editar usuario
      formEditUser.style.display = "block";
      btnEditUser.style.display = "flex";
      // Form no van
      formDelUser.style.display = "none";
      formNewUser.style.display = "none";
      btnDelUser.style.display = "none";
      btnNewUser.style.display = " none";
      break;

  }
}