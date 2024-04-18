<div>
    <form action="/usuario" method="POST">
        <div>
            <label for="nome">
                Nome
            </label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="telefone">
                Telefone
            </label>
            <input type="text" name="telefone" id="telefone" maxlength="12" required>
        </div>
        <div>
            <label for="email">
                E-mail
            </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <div>
                <label for="datanasc">
                    Data de Nascimento
                </label>
                <input type="date" name="datanasc" id="datanasc" required>
            </div>
            <label for="cpf">
                CPF
            </label>
            <input type="text" name="cpf" id="cpf" maxlength="14" required>
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
</div>
