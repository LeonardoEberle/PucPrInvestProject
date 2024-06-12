@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">INVESTIFY</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 " aria-current="page" href="userHome.html">
                  HOME
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userIdeias.html">
                  IDÉIAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userMinhacarteira.html">
                  MINHA CARTEIRA
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userAssesoria.html">
                  ASSESSORIA
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userMinhasIdeias.html">
                  MINHAS IDÉIAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 active" href="userCriarIdeia.html">
                  CRIAR NOVAS IDÉIAS
                </a>
              </li>
            </ul>
            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userFeedback.html">
                  FEEDBACK DE IDÉIAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userPropostas.html">
                  PROPOSTAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userMeusClientes.html">
                  MEUS CLIENTES
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="userVistoria.html">
                  VISTORIA
                </a>
              </li>
            </ul>
            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                 <a class="nav-link d-flex align-items-center gap-2" href="userPerfil.html">
                  <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                  PERFIL
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#door-closed"/></svg>
                  SAIR
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mt-5">
          <h1 class="mb-4">Cadastre sua Empresa</h1>
          <form>
            <div class="form-group">
              <label for="ide_nome">Nome</label>
              <input type="text" class="form-control" id="ide_nome" name="ide_nome" maxlength="100" required>
            </div>
            <div class="form-group">
              <label for="ide_descricao">Descrição</label>
              <textarea class="form-control" id="ide_descricao" name="ide_descricao" rows="3" maxlength="500" required></textarea>
            </div>
            <div class="form-group">
              <label for="ide_tipo">Tipo</label>
              <select class="form-control" id="ide_tipo" name="ide_tipo" required>
                <option value="">Selecione o tipo de investimento</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Negocios">Negócios</option>
                <option value="Alimenticio">Alimentício</option>
                <option value="Saude">Saúde</option>
                <option value="Construcao">Construção</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Consultoria">Consultoria</option>
                <option value="Industria">Indústria</option>
                <option value="Energia">Energia</option>
                <option value="Turismo">Turismo</option>
                <option value="Outros">Outros</option>
              </select>
            <div class="form-group">
              <label for="ide_cnpj">CNPJ</label>
              <input type="text" class="form-control" id="ide_cnpj" name="ide_cnpj" maxlength="14" required>
            </div>
            <div class="form-group">
              <label for="ide_valorInicio">Valor Inicial</label>
              <input type="number" step="0.01" class="form-control" id="ide_valorInicio" name="ide_valorInicio" min="0" required>
            </div>
            <div class="form-group">
              <label for="ide_valorAtual">Valor Atual</label>
              <input type="number" step="0.01" class="form-control" id="ide_valorAtual" name="ide_valorAtual" min="0" required>
            </div>
            <div class="form-group">
              <label for="ide_participacaoDisp">Participação Disponível</label>
              <input type="number" class="form-control" id="ide_participacaoDisp" name="ide_participacaoDisp" min="0" max="100" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
        </div>
    </div>
</div>
@endsection
