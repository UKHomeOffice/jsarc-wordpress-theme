# Jsarc deployment infrastructure

The infrastructure for hosting the jsarc wordpress site is split across several stacks. The stacks must be created in the following order, due to export dependencies:

``````
vpc (creates the vpc with public and private subnets)
alb (creates the application load balancer, target group, listener and ecs security group)
iam (creates a task execution role)
ecs (creates a task definition and a service)
rds (creates a MySQL database)

```````

Currently, infrastructure is deployed within eu-west-1, at [jsarc-wordpress-1452603498.eu-west-1.elb.amazonaws.com].
