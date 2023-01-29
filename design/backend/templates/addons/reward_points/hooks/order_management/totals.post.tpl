{if $cart.points_info.reward}
    <tr>
        <td>{__("points")}:</td>
        <td>{$cart.points_info.reward}</td>
    </tr>
{/if}

{if $cart.points_info.in_use}
    <tr>
        <td class="nowrap">{__("points_in_use")}&nbsp;({__("points_lowercase", [$cart.points_info.in_use.points])})&nbsp;<a class="cm-post" href="{"order_management.delete_points_in_use"|fn_url}">{include_ext file="common/icon.tpl" class="icon-trash" title=__("delete")}</a>:</td>
        <td>{include file="common/price.tpl" value=$cart.points_info.in_use.cost}</td>
    </tr>
{/if}
