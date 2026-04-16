<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
        <h4>
            <i class="material-icons">playlist_add_circle</i>
            Novo produto
        </h4>

        <form action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (auth()->check())
                <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
            @endif

            <div class="row">

                <!-- Nome -->
                <div class="input-field col s6">
                    <input name="nome" id="nome" type="text" class="validate" required>
                    <label for="nome">Nome do Produto</label>
                </div>

                <!-- Preço -->
                <div class="input-field col s6">
                    <input name="preco" id="preco" type="number" step="0.01" class="validate" required>
                    <label for="preco">Preço do Produto</label>
                </div>

                <!-- Descrição -->
                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea" required></textarea>
                    <label for="descricao">Descrição do Produto</label>
                </div>

                <!-- Categoria -->
                <div class="input-field col s12">
                    <select name="id_categoria" required>
                        <option value="" disabled selected>Escolha uma categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">
                                {{ $categoria->nome }}
                            </option>
                        @endforeach
                    </select>
                    <label>Categoria</label>
                </div>

                <!-- Imagem -->
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Imagem</span>
                        <input name="imagem" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecione uma imagem">
                    </div>
                </div>

            </div>

            <!-- Botões -->
            <div class="row" style="margin-bottom: 20px;">
                <div class="col s12 right-align">
                    <a href="#!" class="modal-close waves-effect waves-red btn red">
                        Cancelar
                    </a>

                    <button type="submit" class="waves-effect waves-green btn green">
                        Cadastrar
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
