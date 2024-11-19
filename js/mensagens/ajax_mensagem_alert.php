<div id="modal_alert" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 90% !important; margin: 0 auto;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 18px; padding: 4px;"><i class="fa-regular fa-bell efeito-zoom"></i> Alerta</h5>
        <button type="button" class="close efeito-zoom" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-size: 16px;">
        <div id="conteudo_modal_alert"> </div> 
      </div>
      <div id="rodape_alert" class="modal-footer"></div>
    </div>
  </div>
</div>

<script>
    function ajax_alert(js_mensagem,js_acao){
        $('#modal_alert').modal('show');
        $("#conteudo_modal_alert").empty();
        $("#conteudo_modal_alert").append(''+js_mensagem+'');

        $("#rodape_alert").empty();
        $("#rodape_alert").append('<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="' + js_acao + '"><i class="fa-solid fa-check"></i> Confirmar</button>');
        $("#rodape_alert").append('<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Fechar</button>'); 
    }

    function ajax_horario_chegada(js_mensagem) {
      $('#modal_alert').modal('show');
      $("#conteudo_modal_alert").empty();
      $("#conteudo_modal_alert").append(''+js_mensagem+'');
      $("#conteudo_modal_alert").append('<br>');
      $("#conteudo_modal_alert").append('<input type="datetime-local" id="hr_chegada" class="form-control" style="margin-top: 5px;">');

      $("#rodape_alert").empty();
      $("#rodape_alert").append('<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="registrar_hora_chegada()"><i class="fa-solid fa-check"></i> Confirmar</button>');
      $("#rodape_alert").append('<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Fechar</button>'); 
    }

    function ajax_ficha_cancelada(js_mensagem, justificativas) {
      $('#modal_alert').modal('show');
      $("#conteudo_modal_alert").empty();
      $("#conteudo_modal_alert").append(''+js_mensagem+'');
      $("#conteudo_modal_alert").append('<br>');
      $("#conteudo_modal_alert").append(justificativas);

      $("#rodape_alert").empty();
      $("#rodape_alert").append('<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cancelamento_registro()"><i class="fa-solid fa-check"></i> Confirmar</button>');
      $("#rodape_alert").append('<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Fechar</button>'); 
    }

    function cancelamento_registro() {
      let justificativa = document.getElementById('justificativas');

      if (justificativa.value == 0) {
        justificativa.focus();
      } else {
        ajax_cancelar_ficha(justificativa.value);
        $("#conteudo_modal_alert").empty();
      }
    }

    function registrar_hora_chegada() {
      let hr_chegada = document.getElementById('hr_chegada');

      if (hr_chegada.value == '') {
        hr_chegada.focus();
      } else {
        hr_chegada = new Date(hr_chegada.value);
        hr_chegada = (hr_chegada.getDate() > 9 ? hr_chegada.getDate() : '0' + hr_chegada.getDate()) + '/' + ((hr_chegada.getMonth() + 1) > 9 ? (hr_chegada.getMonth() + 1) : '0' + (hr_chegada.getMonth() + 1)) + '/' + hr_chegada.getFullYear() + ' ' + hr_chegada.getHours() + ':' + hr_chegada.getMinutes();
      
        ajax_registrar_hr_chegada(hr_chegada);
      }
    }

    function ajax_alert_ok(js_mensagem){
      $('#modal_alert').modal('show');
      $("#conteudo_modal_alert").empty();
      $("#conteudo_modal_alert").append(''+js_mensagem+'');

      $("#rodape_alert").empty();
      $("#rodape_alert").append('<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa-solid fa-check"></i> Confirmar</button>');
    }
</script>