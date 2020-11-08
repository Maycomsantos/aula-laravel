@inject('activity', 'App\Services\ActivityLogs')

@php($activities = $activity::find($model))

<div class="card">
    <div class="card-header">
        <h5> <i class="fa fa-calendar-alt"></i> Histórico de Ações</h5>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Ação</th>
                    <th>Data / Hora</th>
                    <th class="text-center w-10">
                        Atributos
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activities as $log)
                    <tr>
                        <td>{{ $log->causer->name }}</td>
                        <td>{{ __('activitylog.' . $log->description) }}</td>
                        <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#log-{{ $log->id }}">
                                <i class="fa fa-search"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="log-{{ $log->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detalhamento do Log</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <pre style="color: #e83e8c">@json($log->properties, JSON_PRETTY_PRINT)</pre>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <td colspan="4">
                        <div class="alert alert-danger text-center">
                            <i class="fa fa-exclamation-triangle"></i>
                            Não há logs cadastrados para esse registro!
                        </div>
                    </td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
