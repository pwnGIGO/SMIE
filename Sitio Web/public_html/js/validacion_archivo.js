function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('No se ha podido subir la imagen. Debe estar guardado como archivo .jpeg/.jpg/.png/.gif');
        fileInput.value = '';
        return false;
    }else if(fileInput.size > 3000000){
            alert('No se han podido subir la imagen. Deben ocupar menos de 3 MB');
            fileInput.value = '';
            return false;
    }else{
          /*/ Visualizacion de la imagen en caso de pasar la validacion */
          if (fileInput.files && fileInput.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
              };
              reader.readAsDataURL(fileInput.files[0]);

          }
    }
}
