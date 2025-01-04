<li class="nav-item dropdown pr-4">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position: relative;width: 35px;height: 35px;margin: 0 10px;">
    @if(backpack_auth()->user()->avatar)
      <img class="img-avatar" 
          src="{{ backpack_avatar_url(backpack_auth()->user()) }}" 
          alt="{{ backpack_auth()->user()->name }}" 
          style="margin: 0;position: absolute;left: 0;z-index: 1;">
    @endif
    <span class="backpack-avatar-menu-container" style="position: absolute;left: 0;width: 100%;background-color: #00a65a;border-radius: 50%;color: #FFF;line-height: 35px;">
      {{backpack_user()->getAttribute('name') ? mb_substr(backpack_user()->name, 0, 1, 'UTF-8') : 'A'}}
    </span>
  </a>
  <div class="dropdown-menu {{ config('backpack.base.html_direction') == 'rtl' ? 'dropdown-menu-left' : 'dropdown-menu-right' }} mr-4 pb-1 pt-1">
    {{-- ACCOUNT INFO --}}
    <a class="dropdown-item" href="{{ route('backpack.account.info') }}"><i class="la la-user"></i> {{ trans('backpack::base.my_account') }}</a>
    
    {{-- MY COMPANY --}}
    @if (backpack_user()->company)
      <a class="dropdown-item" href="{{ route('company.my_company', ['company' => backpack_user()->company]) }}">
        <i class="la la-store-alt"></i> {{ trans('menu.my_company') }}
      </a>
    @endif
    
    <div class="dropdown-divider"></div>
    
    {{-- LOGOUT --}}
    <a class="dropdown-item" href="{{ backpack_url('logout') }}"><i class="la la-lock"></i> {{ trans('backpack::base.logout') }}</a>
  </div>
</li>
