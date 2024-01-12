### 1.3.11
- **[Fix]** Search string containing plus sign breaks WooCommerce search.
- **[Fix]** Deprecation notices on PHP 8.2.

### 1.3.10
- **[Fix]** Issue with some punctuation in some cases.
- **[Update]** Updated updater.

### 1.3.9
- **[Fix]** Issue with admin searches with SearchWP 4.
- **[Fix]** Stock exclusion logic in some cases.
- **[Fix]** Sorting adaptation in some cases.

### 1.3.7
- **[Improvement]** Use `tax_query` instead of `meta_query` when excluding out of stock items (when enabled in WooCommerce).

### 1.3.6
- **[Change]** Hidden/Out of Stock exclusion (when applicable) now handled by `Mod`s to better integrate with other plugins.

### 1.3.5
- **[Fix]** Integration with sorting not working as expected in some cases.

### 1.3.4
- **[Fix]** Multi-word searches not working in some cases.
- **[Update]** Updated updater.

### 1.3.3.1
- **[Fix]** Prevent Errors when SearchWP is not active.

### 1.3.2
- **[Fix]** SearchWP 4 compatibility updates.

### 1.3.1
- **[New]** Adds SearchWP 4 compatibility.

### 1.2.2
- **[Fix]** Highlighting support.
- **[Update]** Updated updater.

### 1.2.1
- **[Change]** Intercepting WooCommerce JSON Product Search (added in 1.2) is now **opt-in**.
- **[New]** New filter: `searchwp_woocommerce_hijack_json_search` controls whether WooCommerce JSON Product Search requests are intercepted.

### 1.2
- **[New]** Adds support for WooCommerce JSON Product Search.

### 1.1.22
- **[Fix]** Fixes integration with WooCommerce's Price Filter minimum and maximum values.
- **[Fix]** Fixes an issue with incorrect weight calculation.

### 1.1.20
- **[Fix]** Fixed an issue with searches in the WordPress Administration area.
- **[Improvement]** Improved short circuiting behavior to reduce overhead.

### 1.1.18
- **[Fix]** Restored logging in engine statistics in some cases.
- **[Update]** Updated updater.

### 1.1.17
- **[Fix]** Better enforcement when no results are found.
- **[Improvement]** Prevent redundant search from running.
- **[Update]** Updated updater.

### 1.1.16
- **[Improvement]** Better integration with WooCommerce native sorting.

### 1.1.15
- **[Fix]** Fixed an issue that prevented final results from showing in some cases.

### 1.1.14
- **[Fix]** Fixed an issue that prevented final results from showing in some cases.

### 1.1.13
- **[Fix]** Fixed an issue with product visibility in WooCommerce 3.0.

### 1.1.12
- **[Fix]** Fixed an issue that may have prevented proper results from showing when using WooCommerce Layered Navigation Widgets.

### 1.1.11
- **[New]** New filter `searchwp_woocommerce_forced` to force WooCommerce Integration to apply.
- **[Improved]** Better consideration of product visibility.
- **[Improved]** Better handling of redundant filter calls.
- **[Update]** Updated updater.

### 1.1.10
- **[New]** New action `searchwp_woocommerce_before_search`.
- **[New]** New filter `searchwp_woocommerce_consider_visibility`.
- **[New]** New filter `searchwp_woocommerce_query_args`.

### 1.1.9
- **[Fix]** Fixed an issue when searching on defined Shop page.
- **[Fix]** Fixed an issue with WooCommerce Layered Navigation Widgets in WooCommerce 2.6.

### 1.1.8
- **[Fix]** Resolved additional use case where Layered Navigation filters and results were not accurate.
- **[Fix]** Properly exclude out of stock items when that setting is enabled.

### 1.1.7
- **[Fix]** Fixed a regression introduced in version 1.1.6 that may have prevented results from displaying.

### 1.1.6
- **[Fix]** Fixed an issue where Layered Navigation Widget counts were not accurate.
- **[Update]** Updated updater.

### 1.1.3
- **[Fix]** Fixed an issue with WooCommerce Hidden products not being excluded outside of a WooCommerce search by default.

### 1.1.1
- **[Fix]** Fixed an issue with inaccurate search log counts.

### 1.1
- Initial release
