# ElasticPress on OpenSearch

We use OpenSearch on a number of our projects, as an open source alternative to
ElasticSearch.

We also use ElasticPress as a WordPress plugin to talk to OpenSearch. However,
ElasticPress currently assumes that it is talking to an ElasticSearch instance.
Therefore, when OpenSearch reports back its version to ElasticPress, this causes
issues as OpenSearch and ElasticSearch version numbers do not align.

This plugin hooks into ElasticPress to make it think a suitable ElasticSearch version
number has been reported back, therefore causing ElasticPress to behave correctly.

## More information

See [10up's documentation of this issue](https://elasticpress.zendesk.com/hc/en-us/articles/16677288265741-Compatibility),
and our [NAO PR when we first encountered this issue](https://github.com/dxw/nao/pull/192).
