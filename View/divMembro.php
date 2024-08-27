<div class="row g-3">
                <label for="formFileMultiple" calss="form-label">Data de Batismo:</label>
                <input type="date" id="data_batismo" class="form-control" name="data_batismo" required>
            <br>
            </div>
                 <div class="row g-3">
                         <label for="formFileMultiple" class="form-label">Você possui algum cargo?</label>
                </div>
                <div class="row g-3">
                <div class="form-check form-check-inline">
                    <input type="radio" id="cargoSim" name="cargo" class="form-check-input" value="sim">
                    <label class="form-check-label" for="cargoSim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="cargoNao" name="cargo" class="form-check-input" value="nao">
                    <label class="form-check-label" for="cargoNao">Não</label>
                </div>
            </div>


                <div class="row g-3">
                    <label for="formFileMultiple" calss="form-label">Quais?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div> 
                 <br>
                <div class="row g-3">
                    <label for="area" class="form-label">Em qual Área você se congrega?:</label>
                    <select id="area" name="area" class="form-control" required>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>
                <br>
                <div class="row g-3">
                <label for="area" class="form-label">Em qual congregação você se congrega?:</label>
                <input list="congregacao" class="form-control">

                <?php $sql = "SELECT nome FROM congregacoes";
                    $result = $conn->query($sql);
                ?>
                    <datalist id="congregacao">
                    <?php
                         // Loop para preencher o datalist com os dados do banco de dados
                     if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($row['nome']) . "'>";
                     }
                  } else {
                    echo "<option value='Nenhum obreiro encontrado'>";
                }
                ?>
                    </datalist>
                </div>
                <br>
                   <input type="submit" class="btn btn-primary mb-2"> 
                </div>
              </div>