### 1.4.3
- **[Fix]** Error in PHP versions prior to 7.3 caused by a function call trailing comma.
- **[Fix]** MySQL error in the dashboard widget if Metrics has ignored queries.
- **[Fix]** "Remove All Ignored Queries" menu command doesn't work with SearchWP v4.
- **[Fix]** Blocking search query logging by user ID doesn't work.
- **[Fix]** Deprecation notices on PHP 8.2.

### 1.4.2
- **[New]** Option to delete all the data Metrics has logged before a specific date.
- **[Change]** Enhanced menu integration with modern versions on SearchWP.
- **[Fix]** Required parameter error when instantiating \\SearchWP\_Metrics\\Search class with a limited set of arguments.

### 1.4.1
- **[Fix]** Handling of ignored queries with special characters.

### 1.4.0
- **[New]** Ability to manually ignore (with `*` wildcard support).
- **[Improvement]** Bundler.
- **[Update]** Dependencies.
- **[Update]** Updated updater.

### 1.3.2
- **[Fix]** SearchWP 4 compatibility fix when displaying some reports.

### 1.3.1
- **[NOTICE]** The metadata table schema has been updated to be more capable. This update involves dropping and recreating the table. If you would like to retain this data: **BACK UP the existing table before updating**. Note that the data has _not been used in Metrics to date_, but you may have opted in to using it on your own since the introduction of the metadata table. This will be the final update to the metadata table schema. Metrics will be including additional reports based on metadata in future releases. If you are updating from version 1.2.4 or lower, there is nothing for you to do.
- **[Change]** Metadata table schema update.
- **[New]** New filter `searchwp_metrics_meta_origin_use_id` to log the referer ID instead of referer URL.
- **[New]** New action `searchwp_metrics_search_meta` fired when a search is performed.

### 1.2.8
- **[Fix]** Error when SearchWP 4 is not active.
- **[Fix]** Warning when SearchWP is not active.

### 1.2.7
- **[Fix]** Permalink output when click tracking is enabled.
- **[Fix]** Dashboard Widget display when using SearchWP 4.

### 1.2.5
- **[Fix]** Omission of redundant core Stats links when using SearchWP 4.
- **[Fix]** Handling of ignored queries when using SearchWP 4.
- **[Fix]** Removes case sensitivity for Roles in blocklist.
- **[New]** Adds meta table for storing metadata.
- **[New]** Action `searchwp_metrics_search` when a search is run.

### 1.2.4
- **[Fix]** Redundant URL encoding.
- **[Fix]** Redundant Search Stats Dashboard link from core SearchWP Statistics feature.
- **[Fix]** Click buoy SearchWP 4 compatibility.
- **[Update]** Updated updater.

### 1.2.3
- **[Fix]** SearchWP 4 integration issue.

### 1.2.0
- **[New]** Adds SearchWP 4 compatibility.

### 1.1
- **[New]** No Results details can now be exported.
- **[Improvement]** When viewing Popular Search Details, click data is now included in export.
- **[Fix]** Incorrect date range when viewing Popular Search Details.
- **[Fix]** Expected behavior when overriding core SearchWP Statistics.
- **[Update]** Link to documentation for Synonyms.
- **[Update]** Dependencies.
- **[Update]** Updated updater.

### 1.0.9
- **[New]** Added additional parameters `hits_min`, `hits_max` when retrieving popular search queries over time.
- **[Fix]** Relocates hooks to make them more accessible to plugins.
- **[Fix]** False positive when preventing duplicate click tracking.

### 1.0.8
- **[Improvement]** Improved performance both when searching and viewing data.

### 1.0.7
- **[New]** New filter `searchwp_metrics_dashboard_widget` to control whether the Dashboard Widget is displayed.

### 1.0.6
- **[New]** New filter `searchwp_metrics_redirect_status` to modify the Status of click tracking redirects.
- **[New]** Chosen engines are now persisted and the defaults for the next viewing of Metrics.
- **[Fix]** Automatically recreate database tables should they be lost (e.g. after moving a site).
- **[Fix]** Fixed an issue where some options were not removed during uninstallation (if that option is enabled).
- **[Fix]** Fixed an issue preventing click tracking with customized query parameters.

### 1.0.4
- **[Fix]** Fixes an issue that prevented the uninstallation routine from running when enabled.

### 1.0.3
- **[Improvement]** Improves performance when generating Insights.
- **[New]** Settings button now has its own capability.
- **[New]** New filter `searchwp_metrics_capability_settings` to modify the Settings button capability.

### 1.0.2
- **[Fix]** Fixes PHP Notice for division by zero in certain circumstances.

### 1.0.1
- **[Fix]** Fixes PHP Notice in Dashboard Widget when no data has been recorded.
- **[Fix]** Fixes Fatal Error when SearchWP is not activated but Metrics is activated.
- **[Fix]** Fixes Fatal Error due to case sensitivity of Events directory.

### 1.0
- Initial release.
