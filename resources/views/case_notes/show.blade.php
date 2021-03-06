@extends('layout.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Case Note' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('case_notes.case_note.edit', $caseNote->id ) }}" class="btn btn-primary" title="Edit Case Note">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('case_notes.case_note.index') }}" class="btn btn-primary" title="Show All Case Note">
                                        <span class="feather icon-list" aria-hidden="true"></span>
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
                                <div class="col-md-12 col-xl-12">

            <dl class="dl-horizontal">
                            <dt>User</dt>
            <dd>{{ optional($caseNote->user)->name }}</dd>
            <dt>Nurse</dt>
            <dd>{{ optional($caseNote->nurse)->id }}</dd>
            <dt>Note</dt>
            <dd>{{ $caseNote->note }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('case_notes.case_note.destroy', $caseNote->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('case_notes.case_note.create') }}" class="btn btn-success" title="Create New Case Note">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Case Note" onclick="return confirm(&quot;Delete Case Note??&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection