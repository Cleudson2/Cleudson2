
<?php include 'topo.php'; ?>
       
<div>
        <h1>Cadastro de Membros</h1>

       <form  action="processar_cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                  <label for="nome" calss="form-label" >Nome:</label>
                  <input type="text" id="nome"  class="form-control" name="nome"  required>
            </div>
            <br>
            <div class="row g-3">
                  <label for="cpf" calss="form-label" >CPF:</label>
                  <input type="text" id="nome"  class="form-control" name="cpf" x  required>
            </div>
            <br> 
            <div class="row g-3">
                <label for="formFileMultiple" calss="form-label" >Foto:</label>
                <input type="file" id="formFile" name="foto"  class="form-control" accept="image/*" onchange="previewImage(event)">  
            </div>
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" calss="form-label">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" class="form-control" name="data_nascimento" required>
            </div>
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" calss="form-label">Data da conversão:</label>
                <input type="date" id="data_convercao" class="form-control" name="data_convercao" required>
            </div>
            <br>
            <div class="row g-3">
               <label for="formFileMultiple" calss="form-label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone"  class="form-control" required placeholder="Numero de telefone">
            </div> 
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" calss="form-label">Estado Civil:</label>
                <select id="estado_civil" name="estado_civil"  class="form-control required">
                    <option value="casado">Casado</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="viuvo">Viúvo</option>
                    <option value="divorciado">Divorciado</option>
                </select>
            </div>
              <br>
             <div class="row g-3">
                <label for="formFileMultiple" calss="form-label">Cargo:</label>
                <select id="cargo" name="cargo"  class="form-control required">
                    <option value="">Selecione uma opção</option>
                    <option value="div1">Membro</option>
                    <option value="div2">Congregado</option>
                    <option value="div3">Obreiro</option>
                </select>
              </div>
              <br>
                        <select id="mySelect">
              <option value="">Selecione uma opção</option>
              <option value="div1">Mostrar Div 1</option>
              <option value="div2">Mostrar Div 2</option>
              <option value="div3">Mostrar Div 3</option>
          </select>

          <div id="div1" class="myDiv" style="display:none;">
              Esta é a Div 1
          </div>
          <div id="div2" class="myDiv" style="display:none;">
              Esta é a Div 2
          </div>
          <div id="div3" class="myDiv" style="display:none;">
              Esta é a Div 3
          </div>


   
       </form>     
  
    </div>
     

      
  </section>

 <?php include 'footer.php';?>
 <script>
  document.getElementById('cargo').addEventListener('change', function() {
    // Esconde todas as divs
    var divs = document.getElementsByClassName('myDiv');
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
    }

    // Mostra a div correspondente ao valor selecionado
    var selectedValue = this.value;
    if (selectedValue) {
        document.getElementById(selectedValue).style.display = 'block';
    }
}); </script>

</html>