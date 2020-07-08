<?php

namespace JeroenNoten\LaravelAdminLte\Menu\Filters;

use JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper;

class ClassesFilter implements FilterInterface
{
    /**
     * Transforms a menu item. Add classes related attributes when suitable.
     *
     * @param array $item A menu item
     * @return array The transformed menu item
     */
    public function transform($item)
    {
        if (! MenuItemHelper::isHeader($item)) {
            $item['class'] = implode(' ', $this->makeClasses($item));
        }

        if (MenuItemHelper::isSubmenu($item)) {
            $item['submenu_class'] = implode(' ', $this->makeSubmenuClasses($item));
        }

        return $item;
    }

    /**
     * Make classes related to the components of a menu item.
     *
     * @param array $item A menu item
     * @return array The array of classes
     */
    protected function makeClasses($item)
    {
        $classes = [];

        // Add the active class when the item is active.

        if ($item['active']) {
            $classes[] = 'active';
        }

        return $classes;
    }

    /**
     * Make classes related to the components of a submenu item.
     *
     * @param array $item A menu item
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item)
    {
        $classes = [];

        // Add the menu-open class when a sidebar submenu is active.

        if (MenuItemHelper::isSidebarItem($item) && $item['active']) {
            $classes[] = 'menu-open';
        }

        return $classes;
    }
}
