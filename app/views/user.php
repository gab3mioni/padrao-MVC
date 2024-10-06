<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Usuários</h1>
    <form action="user/create" method="POST" class="mb-4">
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Nome do Usuário" required>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Adicionar</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['users'] as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user->id); ?></td>
                <td><?php echo htmlspecialchars($user->name); ?></td>
                <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal"
                            data-id="<?php echo htmlspecialchars($user->id); ?>"
                            data-name="<?php echo htmlspecialchars($user->name); ?>">
                        Editar
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                            data-id="<?php echo htmlspecialchars($user->id); ?>">
                        Excluir
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-3">
        <a href="home" class="btn btn-secondary">Ir para Home</a>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" action="user/update" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editUserId">
                    <div class="form-group">
                        <label for="editUserName">Nome</label>
                        <input type="text" class="form-control" id="editUserName" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja excluir este usuário?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="user/delete" method="POST">
                    <input type="hidden" name="id" id="deleteUserId">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var userId = button.data('id');
        var userName = button.data('name');

        var modal = $(this);
        modal.find('#editUserId').val(userId);
        modal.find('#editUserName').val(userName);
    });

    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var userId = button.data('id');

        var modal = $(this);
        modal.find('#deleteUserId').val(userId);
    });
</script>
</body>
</html>
