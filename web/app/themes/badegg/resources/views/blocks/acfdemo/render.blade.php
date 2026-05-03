@extends('layouts.block-acf', [
  'block' => $block,
  'is_preview' => $is_preview,
  'context' => $context,
  'knockout' => true,
])

@push('styles')
  @vite([ 'resources/views/blocks/acfdemo/style.scss' ])
@endpush

@push('scripts')
  @vite([ 'resources/views/blocks/acfdemo/script.js', 'resources/views/blocks/acfdemo/view.js' ])
@endpush

@section('block-content')
  {!! the_field('content') !!}
@overwrite
