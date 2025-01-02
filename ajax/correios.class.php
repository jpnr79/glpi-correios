<?php
class PluginGlpiCorreios extends Plugin {
    static function showForm() {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    const cepField = document.querySelector("#cep");
                    const addressField = document.querySelector("#address");
                    const neighborhoodField = document.querySelector("#neighborhood");
                    const cityField = document.querySelector("#city");
                    const stateField = document.querySelector("#state");

                    cepField.addEventListener("blur", function() {
                        const cep = cepField.value;
                        if (cep.length === 8) {
                            fetch(`/plugins/glpi-correios/ajax/consulta_cep.php?cep=${cep}`)
                                .then(response => response.json())
                                .then(data => {
                                    if (!data.error) {
                                        addressField.value = data.logradouro || "";
                                        neighborhoodField.value = data.bairro || "";
                                        cityField.value = data.localidade || "";
                                        stateField.value = data.uf || "";
                                    } else {
                                        alert(data.error);
                                    }
                                })
                                .catch(error => console.error("Erro na consulta do CEP:", error));
                        }
                    });
                });
              </script>';
    }
}
?>
