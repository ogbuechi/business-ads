@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Case Notes</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('case_notes.case_note.create') }}" class="btn btn-success" title="Create New Case Note">
                                <span class="feather icon-plus" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        @endif

                        <div class="col-md-12">
        @if(count($caseNotes) == 0)
            <div class="panel-body text-center">
                <h4>No Case Notes Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped table-condensed">
                        <thead>
                        <tr>
                                                        <th>Patient</th>
                            <th>Note</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($caseNotes as $caseNote)
                            <tr>
                                                            <td>{{ optional($caseNote->user)->name }}</td>
                            <td>{{ $caseNote->note }}</td>

                                <td>

                                    <form method="POST" action="{!! route('case_notes.case_note.destroy', $caseNote->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('case_notes.case_note.show', $caseNote->id ) }}" class="btn btn-xs btn-info" title="Show Case Note">
                                                <span class="feather icon-eye" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('case_notes.case_note.edit', $caseNote->id ) }}" class="btn btn-xs btn-primary" title="Edit Case Note">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-xs btn-danger" title="Delete Case Note" onclick="return confirm(&quot;Delete Case Note?&quot;)">
                                                <span class="feather icon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer">
                {!! $caseNotes->render() !!}
            </div>

        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection