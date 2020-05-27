# Component Reference

Quick reference for the component.

---

- [Slots](#slots)
- [Props](#props)
- [Events](#events)

<div class="flex flex-wrap justify-between mt-5">
    <div>
        <code>vue-context</code>
    </div>
    <larecipe-button tag="a" href="https://github.com/rawilk/vue-context/blob/master/src/js/vue-context.vue" target="_blank" radius="full" type="info">
    view source
    </larecipe-button>
</div> 

<a name="slots"></a>
## Slots

| Slot | Description |
| :- | :- |
| default | The default slot also serves as a scoped slot which receives any data passed to the menu |

<a name="props"></a>
## Props

| Property | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `closeOnClick` | Boolean | `true` | If set to `false`, context menu will not automatically close when clicked on. |
| `closeOnScroll` | Boolean | `true` | If set to `true`, context menu will automatically close on window scroll. |
| `lazy` | Boolean | `false` | If set to `true`, context menu will be rendered with a `v-if` instead of `v-show`. |
| `itemSelector` | Array, String | <code style="line-height:32px;">['.v-context-item', '.v-context > li > a']</code> | The selector of the menu items the menu will use to look for to set accessibility attributes and for keyboard navigation. |
| `role` | String | `menu` | Used for the `role` attribute on the context menu. |
| `subMenuOffset` | Number | `10` | Specify the offset in pixels of the submenus. |
| `tag` | String | `ul` | Used as the root element of the context menu. |

<a name="events"></a>
## Events

| Event | Arguments | Description |
| :--- | :--- | :--- |
| close | none | Emits when the context menu is closed |
| open | <div style="line-height:25px;">`event` - The event that triggered the menu to open</div><div style="line-height:25px;margin-top:10px;">`data` - The custom data sent to the menu</div><div style="line-height:25px;margin-top:10px;">`top` - The top (y) position of the menu</div><div style="line-height:25px;margin-top:10px;">`left` - The left (x) position of the menu</div> | Emits when the menu is opened. The event, context menu data, top and left position are all sent through as parameters as well. |