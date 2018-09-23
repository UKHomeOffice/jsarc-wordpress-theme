# Jsarc deployment infrastructure (In progress)

The infrastructure for hosting the jsarc wordpress site is split across several stacks. The stacks must be run in the following order, due to export dependencies between the stacks:

``````
vpc (creates the vpc with public and private subnets)
alb (creates the application load balancer, target group, listener)
iam (creates a task execution role)
ecs (creates a task definition and a service)
rds (IN PROGRESS )

```````
