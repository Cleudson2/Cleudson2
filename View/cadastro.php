
<script>
    function previewImage(event) {
        const previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = ''; // Limpa qualquer pré-visualização existente

        const file = event.target.files[0]; // Obtém o arquivo selecionado

        if (file) {
            const reader = new FileReader(); // Cria um FileReader para ler o arquivo

            reader.onload = function(e) {
                const img = document.createElement('img'); // Cria um elemento de imagem
                img.src = e.target.result; // Define a fonte da imagem para o conteúdo do arquivo
                img.style.maxWidth = '200px'; // Define um tamanho máximo para a imagem
                img.style.maxHeight = '200px';
                previewContainer.appendChild(img); // Adiciona a imagem ao container de pré-visualização
            };

            reader.readAsDataURL(file); // Lê o arquivo como uma URL de dados
        }
    }
    </script>

    <?php include 'topo.php'; ?>
    <?php include '..\controller\conexao.php'; ?>

    <div>
        <h1>Cadastro de Membros</h1>

        <form action="processar_cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" class="form-control" name="nome" required>
            </div>
            <br>
            <div class="row g-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" id="cpf" class="form-control" name="cpf" required>
            </div>
            <br>
            <div class="row g-3">
                <label for="formFile" class="form-label">Foto:</label>
                <input type="file" id="formFile" name="foto" class="form-control" accept="image/*" onchange="previewImage(event)">
            </div>
            <br>
            <!-- Container para pré-visualização da imagem -->
            <div id="image-preview" class="mt-3"></div>
            <br>
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" class="form-label">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" class="form-control" name="data_nascimento" required>
            </div>
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" class="form-label">Data da conversão:</label>
                <input type="date" id="data_convercao" class="form-control" name="data_convercao" required>
            </div>
            <br>
            <div class="row g-3">
               <label for="formFileMultiple" class="form-label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone"  class="form-control" required placeholder="Numero de telefone">
            </div> 
            <br>
            <div class="row g-3">
                <label for="formFileMultiple" class="form-label">Estado Civil:</label>
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
                <select id="cargo" name="cargo"  class="form-control" required>
                    <option value="">Selecione uma opção</option>
                    <option value="div1">Membro</option>
                    <option value="div2">Congregado</option>
                    <option value="div3">Obreiro</option>
                </select>
              </div>
              <br>
                      
          <div id="div1" class="myDiv" style="display:none;">
                <?php include 'divMembro.php'?>
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