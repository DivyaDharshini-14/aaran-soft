@if(session()->get('role_id')!=8)
    <x-menu.base.li-menuitem :routes="'sportsClub'" :label="'Sports Club'"/>
    <x-menu.base.li-menuitem :routes="'sportsClub.masters'" :label="'Sports Master'"/>
    {{--<x-menu.base.li-menuitem :routes="'sportsClub.sportAchievement'" :label="'Sport Achievement'"/>--}}
    {{--<x-menu.base.li-menuitem :routes="'sportsClub.activity'" :label="'Sport Activity'"/>--}}
    <x-menu.base.li-menuitem :routes="'feed'" :label="'Sport Blog'"/>
    <x-menu.base.li-menuitem :routes="'sportsClub.highlight'" :label="'Sport Highlight'"/>
@else
    <x-menu.base.li-menuitem :routes="'sportsClub.studentsView'" :label="'Sports Student'"/>
    {{--<x-menu.base.li-menuitem :routes="'sportsClub.sportAchievement'" :label="'Sport Achievement'"/>--}}
@endif
{{--<x-menu.base.li-menuitem :routes="'sportsClub'" :label="'Sports Club'"/>--}}
{{--<x-menu.base.li-menuitem :routes="'sportsClub.students'" :label="'Sports Students'"/>--}}

