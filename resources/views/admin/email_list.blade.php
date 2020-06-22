@extends('layouts.admin')

@section('title', 'Emails - liste')

@section('content')
<div class="title">
  <h1>Emails-list</h1>
  <hr>
</div>
<div class="right-side">
  @foreach ($contacts as $contact)
  <div class="main-container container-fluid">
    <!-- heading -->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h1 class="text-primary mr-auto">Objet :  {{ $contact->contact_object}}</h1>
        </div>
      </div>
    </div>
    <!-- /heading -->
    <!-- table -->
    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
      <thead class="thead-dark">
        <tr>
          <th>Name</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr class="data-row">
          <td class="align-middle name">  {{ $contact->contact_firstname}} {{ $contact->contact_name}}</td>
          <td class="align-middle word-break description">{{ $contact->contact_message}}</td>
          <td class="align-middle">
            <a href="{{ url('/email/' . $contact->contact_id . '/reply') }}" type="button" class="btn btn-success" id="edit-item" data-item-id="1">répondre</a>
            <a href="{{ url('/email/' . $contact->contact_id . '/delete') }}" type="button" class="btn btn-danger" id="delete-item" data-item-id="2">supprimer</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  @endforeach
</div>
@stop
