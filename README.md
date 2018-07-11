# Senior DevOps Engineer: containers



Design & implement a highly-available infrastructure using Docker and Docker Compose, _similar_

to the sketch below.





```

                             +----------+                    +----------+

                             |          |                    |          |

                             |    FE    |                    |    BE    |

                            /|          |\                  /|          |\

                           / +----------+ \                / +----------+ \

             +----------+ /                \ +----------+ /                \ +----------+

 http/https  |          |/                  \|          |/                  \|          |

>------------|    LB    |                    |    LB    |                    |    DB    |

             |          |\                  /|          |\                  /|          |

             +----------+ \                / +----------+ \                / +----------+

                           \ +----------+ /                \ +----------+ /

                            \|          |/                  \|          |/

                             |    FE    |                    |    BE    |

                             |          |                    |          |

                             +----------+                    +----------+

```





## Required functionality:



* You need to have at least two FEs

* You need to have at least two BEs

* Database must have persistent storage

* Host OS must be able to access the application via http or https





## Technical constraints:



* You can use public Docker images and/or provide your own

* Provide a working `docker-compose.yml` and instructions on how to get the setup running





## Bonus points



* Provide a way to show container metrics

* Have separate networks with least required access

* Tests are provided





## Outstanding bonus points



* Include auto-discovery and service registration



## Notes



Load Balancers are just for demonstration purposes and don't need to be high available or

redundant in your implementation.



There is no need to take care of sessions, authentication and other details.



Take note of the time you spent and communicate it at the end.



*__Do not work on this for more than 12 hours__*. If you couldn't finish in this time,

we will evaluate what was done in that interval.



# Good luck!
