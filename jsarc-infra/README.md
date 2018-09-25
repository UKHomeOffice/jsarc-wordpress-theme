# Jsarc deployment infrastructure

The infrastructure for hosting the jsarc wordpress site is split across several stacks. The stacks must be created in the following order, due to export dependencies:

``````
vpc (creates the vpc with public and private subnets)
alb (creates the application load balancer, target group, listener and security groups)
iam (creates a task execution role)
ecs (creates a task definition and a service)
rds (creates a MySQL database)

```````

Currently the infrastructure is deployed within the eu-west-1 region.
