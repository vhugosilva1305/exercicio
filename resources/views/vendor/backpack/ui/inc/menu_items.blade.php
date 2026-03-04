{{-- This file is used for menu items by any Backpack v7 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Testimonies" icon="la la-question" :link="backpack_url('testimony')" />
<x-backpack::menu-item title="Frames" icon="la la-question" :link="backpack_url('frames')" />
<x-backpack::menu-item title="Texts" icon="la la-question" :link="backpack_url('text')" />